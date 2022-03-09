<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
        <script src="https://cdn-tailwindcss.vercel.app/"></script>

<?php 
wp_head();
?>


  </head>
  <body>
    
<header>
<nav class="fixed top-0 z-30">
        <div class=" w-screen bg-[#3D3D3D] text-white flex justify-between px-3 py-1">
      <div class="flex">
          <span>
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.00001 3.35999C8.43337 3.35999 7.87945 3.52801 7.4083 3.84282C6.93716 4.15764 6.56994 4.60509 6.3531 5.1286C6.13625 5.65211 6.07951 6.22816 6.19006 6.78392C6.30061 7.33968 6.57347 7.85017 6.97415 8.25085C7.37483 8.65153 7.88532 8.92439 8.44108 9.03494C8.99683 9.14548 9.57289 9.08875 10.0964 8.8719C10.6199 8.65506 11.0674 8.28784 11.3822 7.81669C11.697 7.34555 11.865 6.79163 11.865 6.22499C11.865 5.46514 11.5632 4.73642 11.0259 4.19912C10.4886 3.66183 9.75986 3.35999 9.00001 3.35999ZM9.00001 8.08999C8.63115 8.08999 8.27057 7.98061 7.96387 7.77568C7.65717 7.57075 7.41813 7.27947 7.27698 6.93869C7.13582 6.59791 7.09889 6.22292 7.17085 5.86114C7.24281 5.49937 7.42043 5.16706 7.68126 4.90623C7.94208 4.64541 8.27439 4.46778 8.63617 4.39582C8.99794 4.32386 9.37293 4.36079 9.71372 4.50195C10.0545 4.64311 10.3458 4.88215 10.5507 5.18885C10.7556 5.49554 10.865 5.85612 10.865 6.22499C10.8637 6.71875 10.6666 7.19183 10.317 7.54051C9.96739 7.88918 9.49377 8.08499 9.00001 8.08499V8.08999Z" fill="#FAFAFA"/>
<path d="M8.99998 1C7.44258 1.0013 5.94898 1.61884 4.84539 2.71775C3.7418 3.81665 3.11791 5.30762 3.10999 6.865C3.10999 9.2 4.41999 11.155 5.37998 12.58L5.55498 12.84C6.51012 14.2243 7.53477 15.5594 8.62498 16.84L9.00498 17.285L9.38498 16.84C10.4751 15.5592 11.4997 14.2242 12.455 12.84L12.63 12.575C13.585 11.15 14.895 9.2 14.895 6.865C14.8871 5.30675 14.2625 3.81503 13.1578 2.71599C12.0531 1.61694 10.5583 0.99998 8.99998 1ZM11.795 12L11.615 12.265C10.755 13.555 9.61498 15 8.99998 15.715C8.40998 15 7.24498 13.555 6.38498 12.265L6.20998 12C5.32498 10.68 4.10999 8.875 4.10999 6.845C4.10999 6.20284 4.23647 5.56696 4.48221 4.97368C4.72796 4.3804 5.08815 3.84133 5.54223 3.38725C5.99631 2.93317 6.53538 2.57297 7.12866 2.32723C7.72194 2.08148 8.35782 1.955 8.99998 1.955C9.64215 1.955 10.278 2.08148 10.8713 2.32723C11.4646 2.57297 12.0037 2.93317 12.4577 3.38725C12.9118 3.84133 13.272 4.3804 13.5178 4.97368C13.7635 5.56696 13.89 6.20284 13.89 6.845C13.89 8.895 12.68 10.7 11.795 12Z" fill="#FAFAFA"/>
</svg>
          </span>
          <span class="mx-2">California</span>
      </div>
      <div class="grid grid-cols-2 gap-3">
          <a class="cursor-pointer">
              <span>
              <svg width="9" height="18" viewBox="0 0 9 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.29749 18V9.55388H0V6.51287H2.29749V3.91545C2.29749 1.87438 3.65463 0 6.78176 0C8.04789 0 8.98413 0.11799 8.98413 0.11799L8.91036 2.95778C8.91036 2.95778 7.95554 2.94874 6.9136 2.94874C5.78591 2.94874 5.60524 3.45391 5.60524 4.29237V6.51287H9L8.85229 9.55388H5.60524V18H2.29749Z" fill="#F8F8F8"/>
            </svg>
          </span>
          </a>
        <span>
        <a class="cursor-pointer">
    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_2_35)">
            <path d="M21.5416 5.96474C21.4171 5.52037 21.1744 5.11806 20.8395 4.80057C20.4951 4.47333 20.0729 4.23924 19.613 4.1204C17.8915 3.66665 10.9945 3.66666 10.9945 3.66666C8.11917 3.63394 5.2446 3.77782 2.38696 4.09749C1.92696 4.2251 1.50564 4.46442 1.16046 4.79416C0.821289 5.12049 0.575622 5.52291 0.447289 5.96382C0.139007 7.62459 -0.0107769 9.31089 -4.46003e-05 11C-0.0110446 12.6876 0.138372 14.3733 0.447289 16.0362C0.572872 16.4752 0.817622 16.8758 1.15771 17.1994C1.49779 17.523 1.92129 17.7567 2.38696 17.8805C4.13137 18.3333 10.9945 18.3333 10.9945 18.3333C13.8734 18.3661 16.7516 18.2222 19.613 17.9025C20.0729 17.7837 20.4951 17.5496 20.8395 17.2223C21.1743 16.9049 21.4167 16.5025 21.5407 16.0582C21.857 14.398 22.0108 12.711 22 11.0211C22.0237 9.32396 21.8701 7.62901 21.5416 5.96382V5.96474ZM8.80179 14.1387V7.86224L14.5401 11.0009L8.80179 14.1387Z" fill="#F8F8F8"/>
            </g>
            <defs>
            <clipPath id="clip0_2_35">
            <rect width="22" height="22" fill="white"/>
            </clipPath>
            </defs>
            </svg>     
    </a>     
        </span>
      </div>
  </div>
  <div class=" w-screen bg-[#596BAB] text-white flex justify-between md:py-4 px-3 md:px-10 hidden md:flex z-30">
      <div>
          <span class="text-xl md:text-xl font-light tracking-9 uppercase text-white">Spiritual Intervention Ministry</span>
      </div>
      <div>


      <?php
      wp_nav_menu(
        array(
          'menu' => 'primary',
          'container' => '',
          'theme_location' => 'primary',
          'items_wrap' => '<ul id="grid grid-cols-3 gap-2 text-center" class="">%3$s</ul>',
        )
      );
      ?>
          <ul class="grid grid-cols-3 gap-2 text-center">
            <li class="text-xs md:text-xl">
                <a class="cursor-pointer hover:underline hover:text-white">Executive Summary</a>
            </li>
            <li class="text-xs md:text-xl">
                <a class="cursor-pointer hover:underline hover:text-white">Join Us</a>
            </li>
            <li>
                <a class="rounded-full border-2 border-[#FFED48] text-[#FFED48] text-sm md:text-xl px-4 py-2 hover:bg-[#FFED48] hover:text-[#596BAB] cursor-pointer">Donate</a>
            </li>
        </ul>
      </div>
</div>
<div class="pos-f-t md:hidden">
  <div class="collapse mobile-nav" id="navbarToggleExternalContent">
    <div class="bg-[#596BAB] p-4">
      <div>
          <ul class="grid grid-cols-3 gap-2 text-center">
            <li class="text-xs md:text-xl">
                <a class="cursor-pointer text-white hover:underline hover:text-white">Executive Summary</a>
            </li>
            <li class="text-xs md:text-xl">
                <a class="cursor-pointer text-white hover:underline hover:text-white">Join Us</a>
            </li>
            <li>
                <a class="rounded-full border-2 border-[#FFED48] text-[#FFED48] text-sm md:text-xl px-4 py-2 hover:bg-[#FFED48] hover:text-[#596BAB] cursor-pointer">Donate</a>
            </li>
        </ul>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-[#596BAB] px-2">
    <div>
      <span class="text-lg md:text-3xl uppercase text-white">Logo</span>
  </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>
</nav>
</header>

