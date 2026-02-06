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
}, { threshold: 0.6 }); // 20%見えたら実行

// 監視を開始（親要素などを指定）
items.forEach(item => observer.observe(item));



/* ----------------------------------------------------------- */
/* service */
/* ----------------------------------------------------------- */

// card
gsap.registerPlugin(ScrollTrigger);

var panels = gsap.utils.toArray(".section");
panels.pop();

panels.forEach((panel, i) => {

// Get the element holding the content inside the panel
let innerpanel = panel.querySelector(".section-inner");

// Get the Height of the content inside the panel
let panelHeight = innerpanel.offsetHeight;
console.log(panelHeight)

// Get the window height
let windowHeight = window.innerHeight;

let difference = panelHeight - windowHeight;

// ratio (between 0 and 1) representing the portion of the overall animation that's for the fake-scrolling. We know that the scale & fade should happen over the course of 1 windowHeight, so we can figure out the ratio based on how far we must fake-scroll
let fakeScrollRatio = difference > 0 ? (difference / (difference + windowHeight)) : 0;

// if we need to fake scroll (because the panel is taller than the window), add the appropriate amount of margin to the bottom so that the next element comes in at the proper time.
if (fakeScrollRatio) {
    panel.style.marginBottom = panelHeight * fakeScrollRatio + "px";
}

let tl = gsap.timeline({
scrollTrigger:{
    trigger: panel,
    start: "bottom bottom",
    end: () => fakeScrollRatio ? `+=${innerpanel.offsetHeight}` : "bottom top",
    pinSpacing: false,
    pin: true,
    scrub: true
    }
});

// fake scroll. We use 1 because that's what the rest of the timeline consists of (0.9 scale + 0.1 fade)
if (fakeScrollRatio) {
    tl.to(innerpanel, {yPercent:-100, y: window.innerHeight, duration: 1 / (1 - fakeScrollRatio) - 1, ease: "none"});
    }
    tl.fromTo(panel, {scale:1, opacity:1}, {scale: 0.7, opacity: 0.5, duration: 0.9})
        .to(panel, {opacity:0, duration: 0.1});
});



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
        markers: true,
        scrub: true,
    },
    color: "#fff",
    stagger: 0.1
});