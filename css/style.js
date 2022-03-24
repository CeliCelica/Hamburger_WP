function toggleNav() {
    var body = document.body;
    var hamburger = document.getElementById('js-openbtn');
    var blackBg = document.getElementById('js-blackBg');
  
    hamburger.addEventListener('click', function() {
      body.classList.toggle('nav-open');
    });
    blackBg.addEventListener('click', function() {
      body.classList.remove('nav-open');
    });
  }
  toggleNav();








// $(".l-sidebar__openbtn").click(function () {//ボタンがクリックされたら
// 	$(this).toggleClass('active');//ボタン自身に activeクラスを付与し
//     $(".l-sidebar___list").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
//     $(".l-sidebar__cover").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与

// });

// $(".l-sidebar___list a").click(function () {//ナビゲーションのリンクがクリックされたら
//     $(".l-sidebar__openbtn").removeClass('active');//ボタンの activeクラスを除去し
//     $(".l-sidebar__list").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
//     $(".l-sidebar__cover").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去

// });
