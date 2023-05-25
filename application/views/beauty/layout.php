<html lang="en">

<head>
  <?php
  $this->load->view($_SESSION['template_name'] . '/include/header'); ?>
  <style>
    label.error {
      color: red
    }
  </style>
</head>
<body>
<section class="loader-main d-none">
    <div class="loader-wrapper">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
  </section>
  <header>
    <?php $this->load->view($_SESSION['template_name'] . '/include/body_header'); ?>
  </header>
  <!-- -------mobile-device-navbar--- -->
  <div class="mobile-navbar">
    <?php $this->load->view($_SESSION['template_name'] . '/include/mobile_navbar'); ?>
    <div class="floting-cart-btn">
      <a href="<?=base_url().'products/cart_item'?>" class="mobile-cart-btn"><img src="<?=$this->theme_base_url.'/assets/images/header-cart-icon.svg'?>" alt="cart"></a>
    </div>
  </div>
  <?php
  if ($this->session->flashdata('myMessage') != '') {
    echo $this->session->flashdata('myMessage');
    // die;
  }  ?>
  <?php $this->load->view($page); ?>
  <footer>
    <?php $this->load->view($_SESSION['template_name'] . '/include/body_footer'); ?>
    <input type="hidden" id="site_lang" value="<?= $_SESSION['site_lang'] ?>">
    <input type="hidden" id="imageFolder" value="<?= $this->folder ?>">
  </footer>
  <?php $this->load->view($_SESSION['template_name'] . '/include/footer'); ?>
  <!-- Start of LiveChat (www.livechat.com) code -->
<!-- <script>
    window.__lc = window.__lc || {};
    window.__lc.license = 15473118;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/15473118/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript> -->
<!-- End of LiveChat code -->
<!--Start of Tawk.to Script-->
<script>
        setInterval(findTawkAndRemove, 100);

        function findTawkAndRemove() {
            let parentElement = document.querySelector("iframe[title*=chat]:nth-child(2)");
            if (parentElement) {
                let element = parentElement.contentDocument.querySelector(`a[class*=tawk-branding]`);
                if (element) {
                    element.remove();
                }
            }
        }
    </script>
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/646f261fad80445890ef08fe/1h192prti';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>