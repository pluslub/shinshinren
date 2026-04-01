/* ----------------------------------------------------------- */
/* fv slider */
/* ----------------------------------------------------------- */

var swiper = new Swiper(".mySwiper", {
    loop: true,
    spaceBetween: 30,
    effect: "fade",
    autoplay: {
        delay: 3000, // 3秒ごとに切り替え
        disableOnInteraction: false, // ユーザーが操作しても自動再生を止めない
    }
});



/* ----------------------------------------------------------- */
/* hero fade */
/* ----------------------------------------------------------- */
const items = document.querySelectorAll('.fade-item');

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            // 画面に入ったら、各要素に順番にディレイ（遅延）をかけてクラスを付与
            items.forEach((item, index) => {
                setTimeout(() => {
                    item.classList.add('show');
                }, index * 300); // 200msずつずらして表示
            });
            // 一度表示したら監視を止める
            observer.unobserve(entry.target);
        }
    });
}, { threshold: 0.6 }); // 60%見えたら実行

// 監視を開始（親要素などを指定）
items.forEach(item => observer.observe(item));



/* ----------------------------------------------------------- */
/* service (Stacking Cards: PCは上部、スマホは中央で重なりを再現) */
/* ----------------------------------------------------------- */

gsap.registerPlugin(ScrollTrigger);

// iOSのアドレスバーによるリサイズでのガタつきを防止
ScrollTrigger.config({
    ignoreMobileResize: true
});

const panels = gsap.utils.toArray(".section");
let mm = gsap.matchMedia();

// デバイスごとに挙動を切り分け
mm.add({
    // PC用（961px以上）
    isDesktop: "(min-width: 961px)",
    // スマホ・タブレット用（960px以下）
    isMobile: "(max-width: 960px)"
}, (context) => {
    let { isDesktop, isMobile } = context.conditions;

    panels.forEach((panel, i) => {
        // 最後のパネル以外にアニメーションを適用
        if (i < panels.length - 1) {
            gsap.to(panel, {
                scale: 0.9,       // 縮小率
                opacity: 0.1,     // 重なった時の暗転率
                scrollTrigger: {
                    trigger: panel,
                    // デバイスに応じて開始位置を切り替え
                    start: isDesktop ? "top top" : "center center",
                    // 次のパネルが自分の上に完全に乗り上げるまで固定を維持
                    end: () => `+=${panels[i + 1].offsetHeight}`,
                    pin: true,        // その場に固定
                    pinSpacing: false, // 次のパネルを重ねるために必須
                    scrub: true,
                    invalidateOnRefresh: true
                }
            });
        }
    });
});

// リフレッシュして計算を確定させる
ScrollTrigger.refresh();




/* message */
/* ----------------------------------------------------------- */
const target = document.querySelector(".text");
// textContent ではなく innerHTML を使い、<br> を含めて分割する準備をする
const lines = target.innerHTML.trim().split('<br>'); 

target.innerHTML = ""; // 一旦空にする

lines.forEach((line, index) => {
    // 各行の文字をさらに分割
    const chars = line.split("");
    
    chars.forEach(char => {
        const span = document.createElement("span");
        span.textContent = char;
        span.style.color = "#7DC5FE"; // 初期の色
        target.appendChild(span);
    });

    // 行の終わりに <br> を再挿入する（最後の行以外）
    if (index < lines.length - 1) {
        target.appendChild(document.createElement("br"));
    }
});

// GSAPの部分はそのまま（.text span を対象にする）
gsap.to(".text span", {
    scrollTrigger: {
        trigger: ".hero-message",
        start: "top bottom",
        end: "+=1000",
        markers: false,
        scrub: true,
    },
    color: "#fff",
    stagger: 0.1
});




/* ----------------------------------------------------------- */
/* バッジhover */
/* ----------------------------------------------------------- */


// バッジ要素を取得
const badge = document.querySelector("#cursor-badge");

// パフォーマンス向上のための setter
const xSetter = gsap.quickSetter(badge, "x", "px");
const ySetter = gsap.quickSetter(badge, "y", "px");

// 1. マウスを動かした時の処理
window.addEventListener("mousemove", (e) => {
    // マウス位置をバッジにセット
    xSetter(e.clientX);
    ySetter(e.clientY);
});

// 2. すべての .section に対してホバーイベントを設定
// 共通のホバー対象を配列にまとめる
const hoverTargets = document.querySelectorAll(".section, .about");

hoverTargets.forEach((target) => {
    target.addEventListener("mouseenter", () => {
        gsap.to(badge, {
            autoAlpha: 1,
            scale: 1,
            duration: 0.3,
            ease: "power2.out"
        });
    });

    target.addEventListener("mouseleave", () => {
        gsap.to(badge, {
            autoAlpha: 0,
            scale: 0,
            duration: 0.3,
            ease: "power2.in"
        });
    });
});