
/*------------------------------*/
/* Lenis｜完成スクロール */
/*------------------------------*/

// 1. Lenisの初期化
const lenis = new Lenis({
    duration: 1.2, // スクロールの滑らかさ（秒）
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // イージング関数
    smoothWheel: true
});

// 2. LenisのスクロールイベントをGSAPのScrollTriggerに伝える
lenis.on('scroll', ScrollTrigger.update);

// 3. GSAPのticker（更新ループ）にLenisの更新を組み込む
gsap.ticker.add((time) => {
lenis.raf(time * 1000); // 単位をミリ秒に変換
});

// 4. GSAPのtickerのラグを無効化（スクロールの遅延を防ぐ）
gsap.ticker.lagSmoothing(0);


/*------------------------------*/
/* header */
/*------------------------------*/
document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.hamburger-grid');
    const nav = document.querySelector('.nav-grid');
    const links = document.querySelectorAll('.nav-grid__link');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    nav.classList.toggle('active');

    const isOpen = hamburger.classList.contains('active');
    hamburger.setAttribute('aria-expanded', isOpen);
    nav.setAttribute('aria-hidden', !isOpen);
    document.body.style.overflow = isOpen ? 'hidden' : '';

    // リンクのアニメーションディレイを設定
    if (isOpen) {
    links.forEach((link, index) => {
        link.style.transitionDelay = `${0.2 + (index * 0.1)}s`;
    });
    } else {
    links.forEach(link => {
        link.style.transitionDelay = '0s';
    });
    }
});

// アクセシビリティのためのキーボードナビゲーション
nav.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && nav.classList.contains('active')) {
    hamburger.click();
    }
    });
});


gsap.registerPlugin(SplitText, ScrollTrigger);

console.clear();

gsap.set(".split", { opacity: 1 });

document.fonts.ready.then(() => {
    let containers = gsap.utils.toArray(".split-trigger");

    containers.forEach((container) => {
        let text = container.querySelector(".split");
        let animation;

        SplitText.create(text, {
        type: "words,lines",
        mask: "lines",
        linesClass: "line",
        autoSplit: true,
        onSplit: (instance) => {
            console.log("split")
            return gsap.from(instance.lines, {
            yPercent: 120,
            stagger: 0.1,
            scrollTrigger: {
                trigger: container,
                // markers: true,
                scrub: true,
                start: "clamp(top center)",
                end: "clamp(bottom center)"
            }
            });
        }
        });
    });
});