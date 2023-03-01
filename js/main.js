"use strict";
/*---------- ハンバーガーメニュー ----------*/
const hamburger = document.querySelector(".js_hamburger");
const navigation = document.querySelector(".js_navigation");
const body = document.querySelector(".js_body");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("is-active");
  navigation.classList.toggle("is-active");
  body.classList.toggle("is-active");
});

/*---------- オープニングアニメーション ----------*/
function openingAnime() {
  body.classList.toggle("is-active");

  gsap.timeline()
    .from(".js_opening-txt", {
      duration: 1.2,
      autoAlpha: 0,
      y: 40,
    }).to(".js_opening", {
      autoAlpha: 0,
      duration: 0.6,
      onComplete: function () {
        body.classList.toggle("is-active");
      },
    })
    .from(".js_copy", {
      duration: 0.6,
      autoAlpha: 0,
      x: -100,
    })
    .from(".js_sub-copy", {
      duration: 0.6,
      autoAlpha: 0,
      x: -100,
    });
};


const opening = document.querySelector(".js_opening");

function webStorage() {
  if (sessionStorage.getItem('access')) {
    //2回目以降アクセス時の処理には関数を実行しない
    opening.classList.add("is-active");

  } else {
    //初回アクセス時の処理
    sessionStorage.setItem('access', 0);
    openingAnime();
  }
};
webStorage();

//sessionStorageの使い方について
//https: //developer.mozilla.org/ja/docs/Web/API/Window/sessionStorage

/*---------- アコーディオンメニュー ----------*/

const faq = document.querySelectorAll(".js_faq"); //使用するhtml要素を全て取得する
faq.forEach(function (element) {
  const mark = element.querySelector(".js_faq_mark");
  element.addEventListener("click", () => {
    if (element.querySelector(".js_faq-a") == null) {
      element.querySelector(".service_faq_open").classList.add("js_faq-a");

      mark.classList.remove("is-open");

      closingAnim(element.querySelector(".js_faq-a"));
    } else {
      element.querySelector(".js_faq-a").classList.remove("js_faq-a");

      mark.classList.add("is-open");

      openingAnim(element.querySelector(".service_faq_open"));
    }
  });
});

const closingAnim = (content) => {
  gsap.to(content, {
    height: 0,
    opacity: 0,
    duration: 0.5,
    ease: "Power4.inOut",
  });
};

const openingAnim = (content) => {
  gsap.fromTo(
    content, {
      height: 0,
      opacity: 0,
    }, {
      height: "auto",
      opacity: 1,
      duration: 0.5,
      ease: "Power4.inOut",
    }
  );
};

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
        trigger: ".skill",
        start: "top center",
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

    gsap.fromTo(".about-wrapper", {
        scrollTrigger: {
        trigger: ".about",
        start: "center bottom",
        end: "center top",
        },
        duration: 1.2,
        y: -50,
        opacity: 0,
        ease: "power2.out",
    });


