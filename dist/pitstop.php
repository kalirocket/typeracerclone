<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
    <title>Typeracer -Play Typing Games and Race Friends</title>
    <link rel="stylesheet" href="./styles.css" />
  </head>
  <body class="bg-custom_white">
    <div class="bg-custom_blue_bg_1 flex justify-center h-height_1">
      <div class="flex flex-row justify-between items-center w-header">
        <div class="flex flex-row items-center">
          <div>
            <img
              src="./assets/keyboard_static.jpg"
              alt="static_image"
              width="48px"
            />
          </div>
          <div class="ml-2 opacity-95 mt-4">
            <div class="text-size_1 font-bold text-custom_white">
              <a href="./index.php">typeracer</a>
            </div>
            <div class="text-right text-size_8 text-custom_white">Pit Stop</div>
          </div>
        </div>
        <!--header and logo-->
        <div class="mr-3">
          <button onclick="showSideBar()">
            <img
              src="./assets/hamburger_logo.jpg"
              alt="hamburger_logo"
              width="20px"
            />
          </button>
        </div>
        <!--sidebar-->
      </div>
    </div>
    <!--Header with sidebar-->
    <div class="container max-w-screen-max_screen mx-auto flex flex-col">
      <div class="flex flex-row justify-center items-center m-6">
        <div class="w-pitinfo text-custom_blue_bg_1 pr-6 opacity-100">
            <div class="text-2xl">Pit Stop</div>
            <div class="text-size_3/4"> <span class="opacity-70">Welcome to the social and informational area of </span> <span class="">typeracer.com</span>. <span class="opacity-70">Here you can take a break from typeracing to </span> <span>read your message, edit, your profile, make friends</span class="opacity-70">, and learn about your competitors.</div>
        </div> <!--Text-->
        <div class="w-70"><img src="./assets/typeracerpitstop.svg" alt="" width="70px"></div>
      </div> <!--Pit Stop Info-->
      <div class="flex flex-col gap-6 m-6 border-solid border-gray-200 border-1 rounded-lg p-6">
        <div class="flex flex-row justify-between items-end">
            <div class="flex flex-row justify-center items-center gap-x-3">
                <div class="rounded-full shadow-lg drop-shadow-lg bg-white w-16 h-16 flex items-center justify-center"><img src="./assets/whoishere.svg" alt="" width="55px"></div> <!--Image-->
            <div class="text-custom_blue_bg_1 font-bold">Who's Here</div> <!--Who's here text-->
            </div> <!--Image and Who's is here-->
            <div class="flex flex-row gap-x-2">
                <div class="bg-blue-400"><img src="./assets/ChevronLeft.svg" alt="" width="30px"></div>
                <div class="bg-blue-400"><img src="./assets/ChevronRight.svg" alt="next" width="30px"></div>
            </div> <!--Scroll up/down-->
        </div> <!--Who's here text and scroll button(next, previous)-->
        <hr class="opacity-100">
        <div class="grid grid-cols-2 items3:grid-cols-3 items4:grid-cols-4 items5:grid-cols-5">
            <div class="flex flex-col items-center"><div class="bg-cyan-500 rounded-full flex items-center justify-center w-110 h-110 relative"><div class="h-2p5 w-2p5 absolute -bottom-2 right-0"><img class="rounded-full"src="./assets/profile_all.svg" alt=""></div><img src="./assets/helmet.svg" alt="" width="110px" height="=110px"></div> <!--Image-->
            <div>kalirocketdev</div> <!--Name--></div>
            <div class="flex flex-col items-center"><div class="bg-cyan-500 rounded-full flex items-center justify-center w-110 h-110 relative"><div class="h-2p5 w-2p5 absolute -bottom-2 right-0"><img class="rounded-full"src="./assets/profile_all.svg" alt=""></div><img src="./assets/helmet.svg" alt="" width="110px" height="=110px"></div> <!--Image-->
            <div>kalirocketdev</div> <!--Name--></div>
            <div class="flex flex-col items-center"><div class="bg-cyan-500 rounded-full flex items-center justify-center w-110 h-110 relative"><div class="h-2p5 w-2p5 absolute -bottom-2 right-0"><img class="rounded-full"src="./assets/profile_all.svg" alt=""></div><img src="./assets/helmet.svg" alt="" width="110px" height="=110px"></div> <!--Image-->
            <div>kalirocketdev</div> <!--Name--></div>
        </div> <!--Profiles Here-->
      </div> <!--Who's Here-->
      
      <div class="flex flex-row m-6 items-center px-1 gap-x-4">
        <div class="rounded-full shadow-lg drop-shadow-lg bg-white w-16 h-16 flex items-center justify-center"><img src="./assets/flag2.png" alt=""></div>
        <div class="flex flex-row gap-x-1 items-center">
            <div class="text-custom_blue_bg_1 font-bold text-size_4">Who's Racing</div>
            <div class="opacity-60">(Latest Finishes)</div>
        </div> <!--Info-->
      </div> <!--Who's Racing-->
      <div>
        <div class="flex flex-col gap-6 m-6 border-solid bg-slate-100 border-gray-200 border-1 rounded-lg p-6 text-size_6 items4:flex-row justify-between items4:items-center">  
            <div class="items4:flex flex-row items-center gap-x-1"><div class="relative rounded-full shadow-lg drop-shadow-lg bg-cyan-500 w-85 h-85 flex items-center justify-center"><div class="h-2p5 w-2p5 absolute -bottom-2 left-0"><img class="rounded-full"src="./assets/profile_all.svg" alt=""></div><img src="./assets/helmet.svg" alt="" width="85px">
            </div> <!--Image-->
            <div><div class="flex flex-row gap-x-1">
              <div class="text-custom_blue_bg_1">KaliRocket</div>
              <div>vs</div>
              <div class="text-custom_blue_bg_1">Kalirocket</div>
              <div>, and</div>
              <div>3 other opponents</div>
            </div> <!--Profile names-->
            <div> 100 WPM (98% accuracy), 3rd place
            </div></div> <!--Info Wrapper--></div><!--Profile and info-->
            <div>Ghana</div> <!--Country-->
      </div> <!--Profiles racing-->
      <div class="flex flex-col gap-6 m-6 border-solid bg-slate-100 border-gray-200 border-1 rounded-lg p-6 text-size_6 items4:flex-row justify-between items4:items-center">  
            <div class="items4:flex flex-row items-center gap-x-1"><div class="relative rounded-full shadow-lg drop-shadow-lg bg-cyan-500 w-85 h-85 flex items-center justify-center"><div class="h-2p5 w-2p5 absolute -bottom-2 left-0"><img class="rounded-full"src="./assets/profile_all.svg" alt=""></div><img src="./assets/helmet.svg" alt="" width="85px">
            </div> <!--Image-->
            <div><div class="flex flex-row gap-x-1">
              <div class="text-custom_blue_bg_1">KaliRocket</div>
              <div>vs</div>
              <div class="text-custom_blue_bg_1">Kalirocket</div>
              <div>, and</div>
              <div>3 other opponents</div>
            </div> <!--Profile names-->
            <div> 100 WPM (98% accuracy), 3rd place
            </div></div> <!--Info Wrapper--></div><!--Profile and info-->
            <div>Ghana</div> <!--Country-->
      </div> <!--Profiles racing-->
      <div class="flex flex-col gap-6 m-6 border-solid bg-slate-100 border-gray-200 border-1 rounded-lg p-6 text-size_6 items4:flex-row justify-between items4:items-center">  
            <div class="items4:flex flex-row items-center gap-x-1"><div class="relative rounded-full shadow-lg drop-shadow-lg bg-cyan-500 w-85 h-85 flex items-center justify-center"><div class="h-2p5 w-2p5 absolute -bottom-2 left-0"><img class="rounded-full"src="./assets/profile_all.svg" alt=""></div><img src="./assets/helmet.svg" alt="" width="85px">
            </div> <!--Image-->
            <div><div class="flex flex-row gap-x-1">
              <div class="text-custom_blue_bg_1">KaliRocket</div>
              <div>vs</div>
              <div class="text-custom_blue_bg_1">Kalirocket</div>
              <div>, and</div>
              <div>3 other opponents</div>
            </div> <!--Profile names-->
            <div> 100 WPM (98% accuracy), 3rd place
            </div></div> <!--Info Wrapper--></div><!--Profile and info-->
            <div>Ghana</div> <!--Country-->
      </div> <!--Profiles racing-->
      <div class="flex flex-col gap-6 m-6 border-solid bg-slate-100 border-gray-200 border-1 rounded-lg p-6 text-size_6 items4:flex-row justify-between items4:items-center">  
            <div class="items4:flex flex-row items-center gap-x-1"><div class="relative rounded-full shadow-lg drop-shadow-lg bg-cyan-500 w-85 h-85 flex items-center justify-center"><div class="h-2p5 w-2p5 absolute -bottom-2 left-0"><img class="rounded-full"src="./assets/profile_all.svg" alt=""></div><img src="./assets/helmet.svg" alt="" width="85px">
            </div> <!--Image-->
            <div><div class="flex flex-row gap-x-1">
              <div class="text-custom_blue_bg_1">KaliRocket</div>
              <div>vs</div>
              <div class="text-custom_blue_bg_1">Kalirocket</div>
              <div>, and</div>
              <div>3 other opponents</div>
            </div> <!--Profile names-->
            <div> 100 WPM (98% accuracy), 3rd place
            </div></div> <!--Info Wrapper--></div><!--Profile and info-->
            <div>Ghana</div> <!--Country-->
      </div> <!--Profiles racing-->
      <div class="flex flex-col gap-6 m-6 border-solid bg-slate-100 border-gray-200 border-1 rounded-lg p-6 text-size_6 items4:flex-row justify-between items4:items-center">  
            <div class="items4:flex flex-row items-center gap-x-1"><div class="relative rounded-full shadow-lg drop-shadow-lg bg-cyan-500 w-85 h-85 flex items-center justify-center"><div class="h-2p5 w-2p5 absolute -bottom-2 left-0"><img class="rounded-full"src="./assets/profile_all.svg" alt=""></div><img src="./assets/helmet.svg" alt="" width="85px">
            </div> <!--Image-->
            <div><div class="flex flex-row gap-x-1">
              <div class="text-custom_blue_bg_1">KaliRocket</div>
              <div>vs</div>
              <div class="text-custom_blue_bg_1">Kalirocket</div>
              <div>, and</div>
              <div>3 other opponents</div>
            </div> <!--Profile names-->
            <div> 100 WPM (98% accuracy), 3rd place
            </div></div> <!--Info Wrapper--></div><!--Profile and info-->
            <div>Ghana</div> <!--Country-->
      </div> <!--Profiles racing-->
      <div class="bg-custom_blue_bg_1 rounded-md text-custom_white font-bold py-5 text-center m-6 w-button1">Show More Races</div>
    </div>
    <div
      class="bg-school_bg rounded-md bg-school bg-no-repeat bg-bottom flex flex-col p-4 mx-2 gap-3 mb-10"
    >
      <div class="text-2xl text-custom_blue_text font-semibold">
        TypeRacer School Edition Features
      </div>
      <div class="text-sm font-semibold opacity-80">
        You get the same award-winning product as typeracer.com, with these
        additional benefits:
      </div>
      <div>
        <ul class="list-image-[url(./assets/list_style.png)] text-size_2 pl-5">
          <li>
            A private environment for your students, which they could access
            from home, school, or library.
          </li>
          <li>No advertisements will ever be shown to your students.</li>
          <li>
            No installation required - works on any computer with a web browser.
          </li>
        </ul>
      </div>
      <div
        class="bg-custom_green rounded-md py-2 pl-4 text-sm font-bold text-custom_white w-button1"
      >
        More Info
      </div>
      <!--Button-->
    </div>
    </div>
    <!--Main Content-->
    
    <div
      class="w-full bg-custom_blue_bg_1 text-custom_white flex flex-col justify-center items-center gap-4 px-3 py-5"
    >
    <div class="flex flex-row justify-center items-center">
        <div class="text-2xl">Share Tyeracer: </div>
        <div class="ml-2"><img src="./assets/facebook_white.svg" alt="" width="30px"></div>
    </div> <!--Share and facebook like-->
      <ul class="text-size_3 flex flex-wrap justify-center px-6">
        <li>Home |</li>
        <li>Create Account |</li>
        <li>Upgrade |</li>
        <li>Terms of Service |</li>
        <li>Privacy Policy |</li>
        <li>Contact |</li>
        <li>Contribute |</li>
        <li>FAQ</li>
      </ul>
      <!--Links-->
      <div class="text-size_2">&copy; 2008-2023 Addicting Games, Inc.</div>
      <div
        class="flex flex-row rounded-md bg-sky-500 h-change_theme_button w-1/2 justify-center items-center gap-8 theme:h-change_theme_button2"
      >
        <div
          class="flex flex-col text-size_1 items items-center justify-center font-bold text-custom_white pl-8 theme:flex-row gap-1 theme:pl-0"
        >
          <div>Change</div>
          <div class="-mt-2 theme:-mt-0">Theme</div>
        </div>
        <div><img src="./assets/theme_button.png" alt="" /></div>
      </div>
      <!--Theme Change-->
      <div class="-mt-2">
        <img src="./assets/addicting_games.png" alt="" width="100px" />
      </div>
      <!--Addicting games link-->
    </div>
    <!--Footer-->
    <div
      class="invisible bg-custom_blue_bg_2 w-sidebar fixed top-0 right-0 h-full shadow-xl shadow-black flex flex-col justify-start px-8 gap-y-6"
      id="toggle-hide-show"
    >
      <button class="mt-4 -mr-3 flex justify-end items-end">
        <img src="./assets/close.png" alt="" width="20px" onclick="hideSideBar()" />
      </button>
      <!--Close Button-->
      <div class="flex flex-col gap-1">
        <div class="text-custom_white"><a href="./index.php">Race</a></div>
        <hr />
        <div class="text-custom_white">Updates</div>
        <hr />
        <div class="text-custom_white">Discord</div>
        <hr />
        <div class="text-custom_white">About</div>
        <hr />
        <div class="text-custom_white">Merch</div>
      </div>
      <!--Links Wrapper-->
      <div class="flex flex-col gap-1">
        <div class="text-custom_white"><a href="./pitstop.php">Home</a></div>
        <hr />
        <div class="text-custom_white">Profile</div>
        <hr />
        <div class="text-custom_white">History</div>
        <hr />
        <div class="text-custom_white">Competitions</div>
        <hr />
        <div class="text-custom_white">Texts</div>
        <div class="text-custom_white">Messages</div>
        <hr />
        <div class="text-custom_white">Friends</div>
        <hr />
        <div class="text-custom_white">Upgrade</div>
      </div>
      <!--Links Wrapper2-->

      <div class="bg-white rounded-lg px-2 py-4">
        <div class="flex flex-col justify-center items-center mt-2">
          <div
            class="h-profile_height w-profile_width rounded-full border-black shadow-md"
          ></div>
          <!--Profile Icon-->
          <div class="text-custom_blue_bg_2 font-bold">Guest</div>
          <!--Profilename-->
          <div class="text-custom_blue_bg_2 font-bold underline">Sign In</div>
          <div class="text-custom_blue_bg_2 font-bold underline">
            Create Account
          </div>
        </div>
        <!--Profile-->
      </div>
      <!--Mini profile-->
    </div>
    <!--Sidebar-->
    <script src="./main.js"></script>
  </body>
</html>
