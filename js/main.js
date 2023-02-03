'use strict';
/*---------- ハンバーガーメニュー ----------*/
const hamburger = document.querySelector(".js_hamburger");//ハンバーガーメニューを取得
const nav = document.querySelector(".js_nav");//ナビゲーションを取得
const body = document.querySelector(".js_body");//bodyを取得

hamburger.addEventListener('click', () => {
    nav.classList.toggle("is-active");
    hamburger.classList.toggle("is-active");
    body.classList.toggle("is-active");
});

gsap.timeline()
    .from(".js_opening-txt", {
    duration: 1.2,
            //透明度0から
    autoAlpha: 0,
            //y軸40px下から
    y: 40
    }).to(".js_opening-txt", {
    //透明度0
    autoAlpha: 0,
    //時間0.6秒かけて
    duration: 0.6,
    })
    .to(".js_opening", {
        autoAlpha: 0,
    })
    .fromTo(".js_top-kv-main", {
        duration: 0.6,
        autoAlpha: 0,
        x: -100
    }, {
        duration: 0.6,
        autoAlpha: 1,
        x: 0
    })
    .fromTo(".js_top-kv-sub", {
        duration: 0.6,
        autoAlpha: 0,
        x: -100
    }, {
        duration: 0.6,
        autoAlpha: 1,
        x: 0,
    onComplete: () => {
        body.classList.remove("is-active");
    }
    })

    gsap.from(".service-item", {
        scrollTrigger: {
        trigger: ".service-contents",
        start: "center bottom",
        end: "center top",
        },
        duration: 1.2,
        y: 15,
        opacity: 0,
        ease: "power2.out",
        // 複数要素を扱うプロパティ
        stagger: {
        from: "start",
        amount: 1.5
        }
    });

    gsap.from(".skill_item", {
        scrollTrigger: {
        trigger: ".skill_contents",
        start: "center bottom",
        end: "center top",
        },
        duration: 1.2,
        y: 15,
        opacity: 0,
        ease: "power2.out",
        // 複数要素を扱うプロパティ
        stagger: {
        from: "start",
        amount: 1.5
        }
    });

    gsap.from(".about-wrapper", {
        scrollTrigger: {
        trigger: ".about",
        start: "center bottom",
        end: "center top",
        },
        duration: 1.2,
        y: 15,
        opacity: 0,
        ease: "power2.out",
        // 複数要素を扱うプロパティ
        stagger: {
        from: "start",
        amount: 1.5
        }
    });