<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico">
    <title>Typeracer -Play Typing Games and Race Friends</title>
    <link rel="stylesheet" href="./styles.css" />
    
  </head>
  <body class="bg-border_color">
    <div class="h-70 w-full bg-background_all bg-no-repeat bg-cover lg:text-110"><div class="bg-custom_blue_bg_1 flex justify-center h-height_1 xl:px-100">
        <div class="flex flex-row justify-between items-center w-header">
          <div class="flex flex-row items-center lg:gap-x-8 lg:-ml-7">
            <div>
              <img
                src="./assets/keyboard_static.jpg"
                alt="static_image"
                width="48px"
              />
            </div>
            <div
              class="text-size_1 font-bold text-custom_white lg:-ml-3 opacity-95"
            >
              <a href="./index.php">typeracer</a>
            </div>
            <div class="absolute invisible lg:visible lg:static flex flex-row gap-x-8">
              <div class="text-size_1 text-custom_white"><a href="./pitstop.php">Pit Stop</a></div>
            <div class="text-size_1 text-custom_white"><a href="#">Updates</a></div>
            <div class="text-size_1 text-custom_white"><a href="#">Discord</a></div>
            <div class="text-size_1 text-custom_white"><a href="#">About</a></div>
            <div class="text-custom_white"><a href="#">Merch</a></div>
          </div>
          </div>
          <!--<div class="mt-6 rounded-md bg-cyan-500 flex items-center"><img src="./assets/helmet_small.svg" alt="" width="50px"></div>-->
          <!--header and logo and other items-->
          <div class="lg:-mr-7">
            <div class="invisible absolute lg:visible lg:static flex flex-row gap-x-2">
              <div class="bg-cyan-500 w-50 rounded-md"><img src="./assets/helmet_small.svg" alt=""></div> <!--Pic-->
              <div class="flex flex-col justify-start">
                <div class="text-custom_white font-semibold">Guest</div>
                <div class="flex flex-row gap-x-2 text-size_2 font-semibold">
                  <div class="bg-side_create text-custom_blue_bg_1 rounded-md px-2 py-1">CREATE ACCOUNT</div>
                  <div class="bg-custom_green text-custom_white px-2 py-1 rounded-md">SIGN IN</div>
                  <div class="text-custom_white bg-cyan-500 px-6 py-1 rounded-md">0 WPM</div>
                  <div class="text-custom_white bg-cyan-500 px-6 py-1 rounded-md">0 Races</div>
                </div>
              </div> <!--Username and other info-->
              
            </div>
            <button class="static visible lg:invisible lg:absolute" onclick="show()">
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
    <div class="container max-w-max mx-auto">
      <div class="invisible absolute text-black bg-white p-4 mx-2 mt-4 rounded-lg" id="show-for-game">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, veniam voluptatum aliquid sed sint nobis quod ex molestias, molestiae libero adipisci? Eveniet laboriosam fuga ab nam tempore alias incidunt non quod reprehenderit minima voluptatum aliquid officia, vel perspiciatis consequatur velit modi, eos, illum amet! Quod et voluptas assumenda cupiditate repudiandae dolor modi commodi facere asperiores impedit quidem at suscipit maiores nemo velit doloremque odit voluptatum quos, eaque quis distinctio. Blanditiis nobis eaque distinctio voluptate fuga adipisci amet consequuntur officiis nisi optio dolores, iste fugiat accusantium est culpa ipsum tempora molestias, sapiente provident error corporis earum eum voluptatum! Modi natus soluta adipisci? Esse magni adipisci dolores, corrupti quod sint veniam architecto voluptates unde in eos ipsum doloremque maiores enim incidunt laudantium. Voluptates, sed repudiandae fugiat cupiditate voluptatibus ipsa tempora, dignissimos aliquam laudantium corporis maxime? Animi illo qui minus quaerat earum consectetur fugit voluptate labore amet vitae minima beatae sunt sed ex veniam ratione vero, nam quo repudiandae! Maxime eum sed et possimus fugiat amet omnis accusantium rerum eos. Architecto, fugit quibusdam. Quasi aut asperiores cum, nostrum ad deserunt vitae. Molestias quas temporibus neque in rem dolorum incidunt. Dolore illo, minima ullam, nobis eum quia sequi delectus esse possimus nostrum laboriosam similique!</div> <!--GameGround after clicking enter a typing race button-->
      
      <div class="bg-white mx-2 my-4 py-4 rounded-lg text-custom_blue_text flex flex-col justify-center items-center text-size_4 opacity-95 hide-for-game">
        <div>Get a TypeRacer Mug for your desk</div>
    <div class="text-size_2">T-Shirts, Hoodies, Hats and more on the official merch store!</div>
    <div class="text-custom_orange text-size_3">Click Here!</div>
  </div> <!--Adverts-->
      <div class="grid grid-cols-1 gap-4 mt-4 px-1">
        <div
          class="bg-redcar bg-no-repeat bg-right-bottom bg-50% bg-white rounded-lg p-custom_p1 shadow-custom_shadow hide-for-game"
        >
          <div class="flex flex-col justify-center space-y-4">
            <div>
              <div>
                <div
                  class="text-size_4 text-custom_blue_text font-bold leading-6 opacity-90"
                >
                  TypeRacer - The Global Typing Competition
                </div>
              </div>
              <div class="text-size_2 text-custom_blue_text font-inner_text">
                Increase your typing speed while racing against others!
              </div>
            </div>
            <div>
              <div>
                <div>
                  <button onclick="hideForGame()"
                    class="bg-custom_green text-custom_white w-button1 h-10 rounded-md flex items-center justify-center opacity-90 text-size_3 font-bold"
                  >
                    Enter a Typing Race
                  </button>
                </div>
              </div>
            </div>
            <!--Enter game-->
            <div
              class="bg-whiteglass backdrop-filter backdrop-blur-sm rounded-lg space-y-4"
            >
              <div class="lg:flex flex-row justify-between"><div class="lg:flex flex-row">
                <div
                  class="text-custom_blue_text font-extralight flex flex-col breakpoint:flex-row lg:mr-4"
                >
                  <div class="w-button2">
                    Language:
                    <span class="text-custom_blue_bg_1 font-bold">English</span>
                  </div>
                  <div
                    class="flex flex-row justify- start items-center space-x-4"
                  >
                    <div>Instant Death Mode:</div>
                    <span
                      ><img
                        src="./assets/switch.jpg"
                        alt="accuracy"
                        width="50px"
                    /></span>
                  </div>
                </div>
                <!--Language, Death mode-->
                <div class="font-extralight text-custom_blue_text">
                  Theme: <span class="font-bold">Responsive</span>
                </div>
                <!--Theme-->
              </div>
              <!--Theme and Language, Death mode Wrapper-->
              <div class="flex flex-row justify-start items-center space-x-5">
                <img src="./assets/discord.svg" alt="discord" width="25px" />
                <img src="./assets/facebook.svg" alt="facebook" width="25px" />
                <img src="./assets/tiktok.svg" alt="tiktok" width="25px" />
                <img src="./assets/youtube.svg" alt="youtube" width="25px" />
                <img src="./assets/twitter.svg" alt="twitter" width="25px" />
              </div>
              <!--Social links--></div> <!--socials and ... wrapper for breakpoint responsive-->
            </div>
            <!--Language... and socials-->
          </div>
          <!--Items-->
        </div>
        <!--Typeracer-The Global....-->
        <div class="flex flex-col gap-4 lg:flex lg:flex-row lg:justify-between hide-for-game"><div
          class="bg-oldredcar bg-no-repeat bg-right-bottom bg-40% bg-white rounded-lg p-custom_p1 shadow-custom_shadow flex flex-col space-y-4 lg:w-49 "
        >
          <div>
            <div class="text-custom_blue_text text-size_5 font-bold">
              Typing Test
            </div>
            <div class="text-size_6 text-custom_blue_text">
              Improve your typing skills on your own
            </div>
          </div>
          <!--Typing test and Improve...-->
          <div
            class="bg-custom_blue_bg_2 text-custom_white text-size_7 w-button3 rounded-md opacity-90 h-10 flex justify-center items-center font-bold"
          >
            Practice Yourself
          </div>
        </div>
        <!--Typing test....-->
        <div class="bg-white rounded-md lg:w-49" >
          <div
            class="bg-redbluecar bg-no-repeat bg-right-bottom bg-40% bg-white rounded-lg p-custom_p1 shadow-custom_shadow flex flex-col space-y-4"
          >
            <div>
              <div class="text-custom_blue_text text-size_5 font-bold">
                Race your friends
              </div>
              <div class="text-size_6 text-custom_blue_text">
                Create your own racetrack and play with friends
              </div>
            </div>
            <!--Typing test and Improve...-->
            <div
              class="bg-custom_orange text-custom_white text-size_7 w-button3 rounded-md opacity-90 h-10 flex justify-center items-center font-bold"
            >
              Create Racetrack
            </div>
          </div>
          <!--Race your friends-->
        </div>
        <!--Race your friends--></div> <!--Race your friends and typing test wrapper-->
        <div class="text-custom_white bg-custom_blue_bg_1 mx-1 p-6 rounded-lg lg:flex lg:flex-row lg:justify-between">
          <div><div class="font-bold text-size_4">Record your races with a TypeRacer Account!</div>
          <div class="text-size_3 mt-2">Save your race history and scores. Customers your profile and car. It's free, why not?</div></div> <!--Record and save wrapper-->
          <div class="mt-2 bg-orange-600 rounded-md p-4 w-button1 text-size_3 font-bold">Create Your Account</div>
        </div> <!--Create Account-->
        <div
          class="bg-white rounded-md h-435 overflow-auto pt-4 px-4 gap-4 grid 647:h-auto 647:flex static hide-for-game" 
        >
          <div
            class="bg-all bg-no-repeat rounded-lg h-195 bg-top bg-custom_blue_bg_1 flex flex-col justify-between 647:w-32.4 flex-shrink-0"
          >
            <div class="flex items-center justify-end">
              <div
                class="bg-custom_blue_bg_1 flex flex-row justify-center items-center rounded-md w-50 text-custom_white text-size_6 mt-2 mr-2"
              >
                <div><img src="./assets/flag.svg" alt="" /></div>
                <div>5973</div>
              </div>
            </div>
            <div class="rounded-lg bg-custom_blue_bg_1">
              <div class="flex flex-row">
                <img
                  class="ml-4"
                  src="./assets/all_small.svg"
                  alt=""
                  width="20px"
                />
                <div class="text-custom_white text-bold text-size_5 ml-2">
                  Dictionary
                </div>
              </div>
              <div class="text-custom_white text-size_7 opacity-80 ml-4 mb-4">
                Randomly generated top English words!
              </div>
            </div>
          </div>
          <!--Dictionary-->
          <div
            class="bg-all2 bg-no-repeat rounded-lg h-195 bg-top bg-custom_blue_bg_1 flex flex-col justify-between 647:w-32.4 flex-shrink-0"
          >
            <div class="flex items-center justify-end">
              <div
                class="bg-custom_blue_bg_1 flex flex-row justify-center items-center rounded-md w-50 text-custom_white text-size_6 mt-2 mr-2"
              >
                <div><img src="./assets/flag.svg" alt="" /></div>
                <div>1258</div>
              </div>
            </div>
            <div class="rounded-lg bg-custom_blue_bg_1">
              <div class="flex flex-row">
                <img
                  class="ml-4"
                  src="./assets/all2_small.svg"
                  alt=""
                  width="20px"
                />
                <div class="text-custom_white text-bold text-size_5 ml-2">
                  Repeating Words
                </div>
              </div>
              <div class="text-custom_white text-size_7 opacity-80 ml-4 mb-4">
                Easy repeating words for practice
              </div>
            </div>
          </div>
          <!--Repeating Words-->
          <div
            class="bg-all3 bg-no-repeat rounded-lg h-195 bg-top bg-custom_blue_bg_1 flex flex-col justify-between 647:w-32.4 flex-shrink-0"
          >
            <div class="flex items-center justify-end">
              <div
                class="bg-custom_blue_bg_1 flex flex-row justify-center items-center rounded-md w-50 text-custom_white text-size_6 mt-2 mr-2"
              >
                <div><img src="./assets/flag.svg" alt="" /></div>
                <div>3317</div>
              </div>
            </div>
            <div class="rounded-lg bg-custom_blue_bg_1">
              <div class="flex flex-row">
                <img
                  class="ml-4"
                  src="./assets/all3_small.svg"
                  alt=""
                  width="20px"
                />
                <div class="text-custom_white text-bold text-size_5 ml-2">
                  Bahasa Indonesia
                </div>
              </div>
              <div class="text-custom_white text-size_7 opacity-80 ml-4 mb-4">
                Mengetik dalam bahasa Indonesia!
              </div>
            </div>
          </div>
          <!--Bahasa Indonesia-->
          <div
            class="bg-all4 bg-no-repeat rounded-lg h-195 bg-top bg-custom_blue_bg_1 flex flex-col justify-between 647:w-32.4 flex-shrink-0"
          >
            <div class="flex items-center justify-end">
              <div
                class="bg-custom_blue_bg_1 flex flex-row justify-center items-center rounded-md w-50 text-custom_white text-size_6 mt-2 mr-2"
              >
                <div><img src="./assets/flag.svg" alt="" /></div>
                <div>1732</div>
              </div>
            </div>
            <div class="rounded-lg bg-custom_blue_bg_1">
              <div class="flex flex-row">
                <img
                  class="ml-4"
                  src="./assets/all4_small.svg"
                  alt=""
                  width="20px"
                />
                <div class="text-custom_white text-bold text-size_5 ml-2">
                  Anime
                </div>
              </div>
              <div class="text-custom_white text-size_7 opacity-80 ml-4 mb-4">
                Tokyo Ghoul, AoT and MORE!
              </div>
            </div>
          </div>
          <!--Anime-->
          <div
            class="bg-all6 bg-no-repeat rounded-lg h-195 bg-top bg-custom_blue_bg_1 flex flex-col justify-between 647:w-32.4 flex-shrink-0"
          >
            <div class="flex items-center justify-end">
              <div
                class="bg-custom_blue_bg_1 flex flex-row justify-center items-center rounded-md w-50 text-custom_white text-size_6 mt-2 mr-2"
              >
                <div><img src="./assets/flag.svg" alt="" /></div>
                <div>2568</div>
              </div>
            </div>
            <div class="rounded-lg bg-custom_blue_bg_1">
              <div class="flex flex-row">
                <img
                  class="ml-4"
                  src="./assets/all5_small.svg"
                  alt=""
                  width="20px"
                />
                <div class="text-custom_white text-bold text-size_5 ml-2">
                  Português TypeRacer
                </div>
              </div>
              <div class="text-custom_white text-size_7 opacity-80 ml-4 mb-4">
                Você pode vencer os mais rapidos digitadores do Brasil?
              </div>
            </div>
          </div>
          <!--Portugues Typeracer-->
          <div
            class="bg-all5 bg-no-repeat rounded-lg h-195 bg-top bg-custom_blue_bg_1 flex flex-col justify-between 647:w-32.4 flex-shrink-0"
          >
            <div class="flex items-center justify-end">
              <div
                class="bg-custom_blue_bg_1 flex flex-row justify-center items-center rounded-md w-50 text-custom_white text-size_6 mt-2 mr-2"
              >
                <div><img src="./assets/flag.svg" alt="" /></div>
                <div>35</div>
              </div>
            </div>
            <div class="rounded-lg bg-custom_blue_bg_1">
              <div class="flex flex-row">
                <img
                  class="ml-4"
                  src="./assets/all5_small.svg"
                  alt=""
                  width="20px"
                />
                <div class="text-custom_white text-bold text-size_5 ml-2">
                  Português Dictionary
                </div>
              </div>
              <div class="text-custom_white text-size_7 opacity-80 ml-4 mb-4">
                Palavras mais comuns em português ao acaso!
              </div>
            </div>
          </div>
          <!--Portugues Dictionary-->
          <div
            class="bg-all7 bg-no-repeat rounded-lg h-195 bg-top bg-custom_blue_bg_1 flex flex-col justify-between 647:w-32.4 flex-shrink-0"
          >
            <div class="flex items-center justify-end">
              <div
                class="bg-custom_blue_bg_1 flex flex-row justify-center items-center rounded-md w-50 text-custom_white text-size_6 mt-2 mr-2"
              >
                <div><img src="./assets/flag.svg" alt="" /></div>
                <div>1375</div>
              </div>
            </div>
            <div class="rounded-lg bg-custom_blue_bg_1">
              <div class="flex flex-row">
                <img
                  class="ml-4"
                  src="./assets/all7_small.svg"
                  alt=""
                  width="20px"
                />
                <div class="text-custom_white text-bold text-size_5 ml-2">
                  Spanish / español
                </div>
              </div>
              <div class="text-custom_white text-size_7 opacity-80 ml-4 mb-4">
                TypeRacer: español
              </div>
            </div>
          </div>
          <!--Spanish/espanol-->
          <div
            class="bg-all8 bg-no-repeat rounded-lg h-195 bg-top bg-custom_blue_bg_1 flex flex-col justify-between 647:w-32.4 flex-shrink-0"
          >
            <div class="flex items-center justify-end">
              <div
                class="bg-custom_blue_bg_1 flex flex-row justify-center items-center rounded-md w-50 text-custom_white text-size_6 mt-2 mr-2"
              >
                <div><img src="./assets/flag.svg" alt="" /></div>
                <div>82</div>
              </div>
            </div>
            <div class="rounded-lg bg-custom_blue_bg_1">
              <div class="flex flex-row">
                <img
                  class="ml-4"
                  src="./assets/all8_small.svg"
                  alt=""
                  width="20px"
                />
                <div class="text-custom_white text-bold text-size_5 ml-2">
                  Jokes
                </div>
              </div>
              <div class="text-custom_white text-size_7 opacity-80 ml-4 mb-4">
                haha joke funny
              </div>
            </div>
          </div>
          <!--Jokes-->
          <div
            class="bg-all9 bg-no-repeat rounded-lg h-195 bg-top bg-custom_blue_bg_1 flex flex-col justify-between 647:w-32.4 flex-shrink-0"
          >
            <div class="flex items-center justify-end">
              <div
                class="bg-custom_blue_bg_1 flex flex-row justify-center items-center rounded-md w-50 text-custom_white text-size_6 mt-2 mr-2"
              >
                <div><img src="./assets/flag.svg" alt="" /></div>
                <div>78</div>
              </div>
            </div>
            <div class="rounded-lg bg-custom_blue_bg_1">
              <div class="flex flex-row">
                <img
                  class="ml-4"
                  src="./assets/all9_small.svg"
                  alt=""
                  width="20px"
                />
                <div class="text-custom_white text-bold text-size_5 ml-2">
                  Video Games
                </div>
              </div>
              <div class="text-custom_white text-size_7 opacity-80 ml-4 mb-4">
                Epic gamer quotes! You'll need more than WASD here.
              </div>
            </div>
          </div>
          <!--Video Games-->
          <div
            class="bg-all10 bg-no-repeat rounded-lg h-195 bg-top bg-custom_blue_bg_1 flex flex-col justify-between 647:w-32.4 flex-shrink-0"
          >
            <div class="flex items-center justify-end">
              <div
                class="bg-custom_blue_bg_1 flex flex-row justify-center items-center rounded-md w-50 text-custom_white text-size_6 mt-2 mr-2"
              >
                <div><img src="./assets/flag.svg" alt="" /></div>
                <div>147</div>
              </div>
            </div>
            <div class="rounded-lg bg-custom_blue_bg_1">
              <div class="flex flex-row">
                <img
                  class="ml-4"
                  src="./assets/all10_small.svg"
                  alt=""
                  width="20px"
                />
                <div class="text-custom_white text-bold text-size_5 ml-2">
                  Hip Hop Hits
                </div>
              </div>
              <div class="text-custom_white text-size_7 opacity-80 ml-4 mb-4">
                Come type these vibes, featuring artists such as Lil Nas X!
              </div>
            </div>
          </div>
          <!--Hip Hop Hits-->
          <div
            class="bg-all11 bg-no-repeat rounded-lg h-195 bg-top bg-custom_blue_bg_1 flex flex-col justify-between 647:w-32.4 flex-shrink-0"
          >
            <div class="flex items-center justify-end">
              <div
                class="bg-custom_blue_bg_1 flex flex-row justify-center items-center rounded-md w-50 text-custom_white text-size_6 mt-2 mr-2"
              >
                <div><img src="./assets/flag.svg" alt="" /></div>
                <div>61</div>
              </div>
            </div>
            <div class="rounded-lg bg-custom_blue_bg_1">
              <div class="flex flex-row">
                <img
                  class="ml-4"
                  src="./assets/all11_small.svg"
                  alt=""
                  width="10px"
                />
                <div class="text-custom_white text-bold text-size_5 ml-2">
                  Movies
                </div>
              </div>
              <div class="text-custom_white text-size_7 opacity-80 ml-4 mb-4">
                Movie time! Can you guess which popular movie you're typing?
              </div>
            </div>
          </div>
          <!--Movies-->
          <div
            class="bg-all12 bg-no-repeat rounded-lg h-195 bg-top bg-custom_blue_bg_1 flex flex-col justify-between 647:w-32.4 flex-shrink-0"
          >
            <div class="flex items-center justify-end">
              <div
                class="bg-custom_blue_bg_1 flex flex-row justify-center items-center rounded-md w-50 text-custom_white text-size_6 mt-2 mr-2"
              >
                <div><img src="./assets/flag.svg" alt="" /></div>
                <div>24</div>
              </div>
            </div>
            <div class="rounded-lg bg-custom_blue_bg_1">
              <div class="flex flex-row">
                <img
                  class="ml-4"
                  src="./assets/all12_small.svg"
                  alt=""
                  width="20px"
                />
                <div class="text-custom_white text-bold text-size_5 ml-2">
                  Copypasta
                </div>
              </div>
              <div class="text-custom_white text-size_7 opacity-80 ml-4 mb-4">
                CTRL + C & CTRL + V. It's that simple.
              </div>
            </div>
          </div>
          <!--Copypasta-->
          <div
            class="bg-all13 bg-no-repeat rounded-lg h-195 bg-top bg-custom_blue_bg_1 flex flex-col justify-between 647:w-32.4 flex-shrink-0"
          >
            <div class="flex items-center justify-end">
              <div
                class="bg-custom_blue_bg_1 flex flex-row justify-center items-center rounded-md w-50 text-custom_white text-size_6 mt-2 mr-2"
              >
                <div><img src="./assets/flag.svg" alt="" /></div>
                <div>28</div>
              </div>
            </div>
            <div class="rounded-lg bg-custom_blue_bg_1">
              <div class="flex flex-row">
                <!-- <img
                  class="ml-4"
                  src=""
                  alt=""
                  width="20px"
                /> -->
                <div class="text-custom_white text-bold text-size_5 ml-4">
                  TyperRacer for Schools
                </div>
              </div>
              <div class="text-custom_white text-size_7 opacity-80 ml-4 mb-4">
                School friendly quotes from award-winning books!
              </div>
            </div>
          </div>
          <!--Typeracer for schools-->
          <div
            class="bg-all14 bg-no-repeat rounded-lg h-195 bg-top bg-custom_blue_bg_1 flex flex-col justify-between 647:w-32.4 flex-shrink-0"
          >
            <div class="flex items-center justify-end">
              <div
                class="bg-custom_blue_bg_1 flex flex-row justify-center items-center rounded-md w-50 text-custom_white text-size_6 mt-2 mr-2"
              >
                <div><img src="./assets/flag.svg" alt="" /></div>
                <div>20</div>
              </div>
            </div>
            <div class="rounded-lg bg-custom_blue_bg_1">
              <div class="flex flex-row">
                <!-- <img
                  class="ml-4"
                  src=""
                  alt=""
                  width="20px"
                /> -->
                <div class="text-custom_white text-bold text-size_5 ml-4">
                  Stenography
                </div>
              </div>
              <div class="text-custom_white text-size_7 opacity-80 ml-4 mb-4">
                For the Steno and Plover users, all welcomed here!
              </div>
            </div>
          </div>
          <!--Stenography-->
          <div
            class="bg-all15 bg-no-repeat rounded-lg h-195 bg-top bg-custom_blue_bg_1 flex flex-col justify-between 647:w-32.4 flex-shrink-0"
          >
            <div class="flex items-center justify-end">
              <div
                class="bg-custom_blue_bg_1 flex flex-row justify-center items-center rounded-md w-50 text-custom_white text-size_6 mt-2 mr-2"
              >
                <div><img src="./assets/flag.svg" alt="" /></div>
                <div>1433</div>
              </div>
            </div>
            <div class="rounded-lg bg-custom_blue_bg_1">
              <div class="flex flex-row">
                <img
                  class="ml-4"
                  src="./assets/all15_small.svg"
                  alt=""
                  width="20px"
                />
                <div class="text-custom_white text-bold text-size_5 ml-2">
                  German/Deutsch
                </div>
              </div>
              <div class="text-custom_white text-size_7 opacity-80 ml-4 mb-4">
                TypeRacer: Deutsch
              </div>
            </div>
          </div>
          <!--German/Deutsch-->
          <div
            class="bg-all16 bg-no-repeat rounded-lg h-195 bg-top bg-custom_blue_bg_1 flex flex-col justify-between 647:w-32.4 flex-shrink-0"
          >
            <div class="flex items-center justify-end">
              <div
                class="bg-custom_blue_bg_1 flex flex-row justify-center items-center rounded-md w-50 text-custom_white text-size_6 mt-2 mr-2"
              >
                <div><img src="./assets/flag.svg" alt="" /></div>
                <div>360</div>
              </div>
            </div>
            <div class="rounded-lg bg-custom_blue_bg_1">
              <div class="flex flex-row">
                <img
                  class="ml-4"
                  src="./assets/all16_small.svg"
                  alt=""
                  width="20px"
                />
                <div class="text-custom_white text-bold text-size_5 ml-2">
                  Italiano
                </div>
              </div>
              <div class="text-custom_white text-size_7 opacity-80 ml-4 mb-4">
                TypeRacer: Italiano
              </div>
            </div>
          </div>
          <!--Italiano-->
          <div
            class="bg-all17 bg-no-repeat rounded-lg h-195 bg-top bg-custom_blue_bg_1 flex flex-col justify-between 647:w-32.4 flex-shrink-0"
          >
            <div class="flex items-center justify-end">
              <div
                class="bg-custom_blue_bg_1 flex flex-row justify-center items-center rounded-md w-50 text-custom_white text-size_6 mt-2 mr-2"
              >
                <div><img src="./assets/flag.svg" alt="" /></div>
                <div>364</div>
              </div>
            </div>
            <div class="rounded-lg bg-custom_blue_bg_1">
              <div class="flex flex-row">
                <img
                  class="ml-4"
                  src="./assets/all17_small.svg"
                  alt=""
                  width="20px"
                />
                <div class="text-custom_white text-bold text-size_5 ml-2">
                  French / français
                </div>
              </div>
              <div class="text-custom_white text-size_7 opacity-80 ml-4 mb-4">
                TypeRacer: Française
              </div>
            </div>
          </div>
          <!--French/francais-->
          <div
            class="bg-all18 bg-no-repeat rounded-lg h-195 bg-top bg-custom_blue_bg_1 flex flex-col justify-between 647:w-32.4 flex-shrink-0"
          >
            <div class="flex items-center justify-end">
              <div
                class="bg-custom_blue_bg_1 flex flex-row justify-center items-center rounded-md w-50 text-custom_white text-size_6 mt-2 mr-2"
              >
                <div><img src="./assets/flag.svg" alt="" /></div>
                <div>299</div>
              </div>
            </div>
            <div class="rounded-lg bg-custom_blue_bg_1">
              <div class="flex flex-row">
                <img
                  class="ml-4"
                  src="./assets/all18_small.svg"
                  alt=""
                  width="20px"
                />
                <div class="text-custom_white text-bold text-size_5 ml-2">
                  Dutch/Nederlands
                </div>
              </div>
              <div class="text-custom_white text-size_7 opacity-80 ml-4 mb-4">
                TypeRacer: Nederlands
              </div>
            </div>
          </div>
          <!--Dutch/ Nederlands-->
          <div
            class="bg-all18 bg-no-repeat rounded-lg h-195 bg-top bg-custom_blue_bg_1 flex flex-col justify-between 647:w-32.4 flex-shrink-0"
          >
            <div class="flex items-center justify-end">
              <div
                class="bg-custom_blue_bg_1 flex flex-row justify-center items-center rounded-md w-50 text-custom_white text-size_6 mt-2 mr-2"
              >
                <div><img src="./assets/flag.svg" alt="" /></div>
                <div>203</div>
              </div>
            </div>
            <div class="rounded-lg bg-custom_blue_bg_1">
              <div class="flex flex-row">
                <!-- <img
                  class="ml-4"
                  src=""
                  alt=""
                  width="20px"
                /> -->
                <div class="text-custom_white text-bold text-size_5 ml-4">
                  Polish / polski
                </div>
              </div>
              <div class="text-custom_white text-size_7 opacity-80 ml-4 mb-4">
                TypeRacer: polski
              </div>
            </div>
          </div>
          <!--Polish/polski-->
          
        </div>
        <!--Typeracer Worlds-->
        <div class="bg-white rounded-md flex flex-col gap-4 pt-4 px-4">
          <div class="bg-custom_blue_bg_1 rounded-md   flex flex-row justify-between items-center px-4 py-2">
            <div class="text-3xl text-custom_white w-full">Latest High Scores</div> <!--Text-->
            <div><img src="./assets/options.png" alt=""></div> <!--Button-->
          </div> <!--Latest high scores-->
          <div class="rounded-lg w-full text-change_f_size">
            <table class="text-center text-size_8 w-full border-collapse">
              <tr class="text-custom_white bg-custom_blue_bg_1">
                <th class="rounded-tl-lg"></th>
                <th class="text-left">Name</th>
                <th>Speed</th>
                <th class="rounded-tr-lg">Time</th>
              </tr>
              <tr>
                <td class="bg-table_no">1</td>
                <td class="text-left">
                  <div class="flex flex-row gap-2"><div><img src="./assets/profile_all.svg" alt="" width="20px"></div><div>Siaw Henry Nartey(KaliRocket)</div></div> <!--Pic and Name-->
                </td>
                <td>100wpm</td>
                <td class="text-custom_blue_text">30 minutes ago</td>
              </tr>
              <tr class="bg-border_color">
                <td class="bg-table_no">2</td>
                <td class="text-left">
                  <div class="flex flex-row gap-2"><div><img src="./assets/profile_all.svg" alt="" width="20px"></div><div>Siaw Henry Nartey(KaliRocket)</div></div> <!--Pic and Name-->
                </td>
                <td>100wpm</td>
                <td class="text-custom_blue_text">30 minutes ago</td>
              </tr>
              <tr>
                <td class="bg-table_no">3</td>
                <td class="text-left">
                  <div class="flex flex-row gap-2"><div><img src="./assets/profile_all.svg" alt="" width="20px"></div><div>Siaw Henry Nartey(KaliRocket)</div></div> <!--Pic and Name-->
                </td>
                <td>100wpm</td>
                <td class="text-custom_blue_text">30 minutes ago</td>
              </tr>
              <tr class="bg-border_color">
                <td class="bg-table_no">4</td>
                <td class="text-left">
                  <div class="flex flex-row gap-2"><div><img src="./assets/profile_all.svg" alt="" width="20px"></div><div>Siaw Henry Nartey(KaliRocket)</div></div> <!--Pic and Name-->
                </td>
                <td>100wpm</td>
                <td class="text-custom_blue_text">30 minutes ago</td>
              </tr>
              <tr>
                <td class="bg-table_no">5</td>
                <td class="text-left">
                  <div class="flex flex-row gap-2"><div><img src="./assets/profile_all.svg" alt="" width="20px"></div><div>Siaw Henry Nartey(KaliRocket)</div></div> <!--Pic and Name-->
                </td>
                <td>100wpm</td>
                <td class="text-custom_blue_text">30 minutes ago</td>
              </tr>
              <tr class="bg-border_color">
                <td class="bg-table_no">6</td>
                <td class="text-left">
                  <div class="flex flex-row gap-2"><div><img src="./assets/profile_all.svg" alt="" width="20px"></div><div>Siaw Henry Nartey(KaliRocket)</div></div> <!--Pic and Name-->
                </td>
                <td>100wpm</td>
                <td class="text-custom_blue_text">30 minutes ago</td>
              </tr>
              <tr>
                <td class="bg-table_no">7</td>
                <td class="text-left">
                  <div class="flex flex-row gap-2"><div><img src="./assets/profile_all.svg" alt="" width="20px"></div><div>Siaw Henry Nartey(KaliRocket)</div></div> <!--Pic and Name-->
                </td>
                <td>100wpm</td>
                <td class="text-custom_blue_text">30 minutes ago</td>
              </tr>
              <tr class="bg-border_color">
                <td class="bg-table_no">8</td>
                <td class="text-left">
                  <div class="flex flex-row gap-2"><div><img src="./assets/profile_all.svg" alt="" width="20px"></div><div>Siaw Henry Nartey(KaliRocket)</div></div> <!--Pic and Name-->
                </td>
                <td>100wpm</td>
                <td class="text-custom_blue_text">30 minutes ago</td>
              </tr>
              <tr>
                <td class="bg-table_no">9</td>
                <td class="text-left">
                  <div class="flex flex-row gap-2"><div><img src="./assets/profile_all.svg" alt="" width="20px"></div><div>Siaw Henry Nartey(KaliRocket)</div></div> <!--Pic and Name-->
                </td>
                <td>100wpm</td>
                <td class="text-custom_blue_text">30 minutes ago</td>
              </tr>
              <tr class="bg-border_color">
                <td class="bg-table_no">10</td>
                <td class="text-left">
                  <div class="flex flex-row gap-2"><div><img src="./assets/profile_all.svg" alt="" width="20px"></div><div>Siaw Henry Nartey(KaliRocket)</div></div> <!--Pic and Name-->
                </td>
                <td>100wpm</td>
                <td class="text-custom_blue_text">30 minutes ago</td>
              </tr>
              <tr>
                <td class="bg-table_no">11</td>
                <td class="text-left">
                  <div class="flex flex-row gap-2"><div><img src="./assets/profile_all.svg" alt="" width="20px"></div><div>Siaw Henry Nartey(KaliRocket)</div></div> <!--Pic and Name-->
                </td>
                <td>100wpm</td>
                <td class="text-custom_blue_text">30 minutes ago</td>
              </tr>
              <tr class="bg-border_color">
                <td class="bg-table_no">12</td>
                <td class="text-left">
                  <div class="flex flex-row gap-2"><div><img src="./assets/profile_all.svg" alt="" width="20px"></div><div>Siaw Henry Nartey(KaliRocket)</div></div> <!--Pic and Name-->
                </td>
                <td>100wpm</td>
                <td class="text-custom_blue_text">30 minutes ago</td>
              </tr>
              <tr>
                <td class="bg-table_no">13</td>
                <td class="text-left">
                  <div class="flex flex-row gap-2"><div><img src="./assets/profile_all.svg" alt="" width="20px"></div><div>Siaw Henry Nartey(KaliRocket)</div></div> <!--Pic and Name-->
                </td>
                <td>100wpm</td>
                <td class="text-custom_blue_text">30 minutes ago</td>
              </tr>
              <tr class="bg-border_color">
                <td class="bg-table_no">14</td>
                <td class="text-left">
                  <div class="flex flex-row gap-2"><div><img src="./assets/profile_all.svg" alt="" width="20px"></div><div>Siaw Henry Nartey(KaliRocket)</div></div> <!--Pic and Name-->
                </td>
                <td>100wpm</td>
                <td class="text-custom_blue_text">30 minutes ago</td>
              </tr>
              <tr class="">
                <td class="bg-table_no">15</td>
                <td class="text-left">
                  <div class="flex flex-row gap-2"><div><img src="./assets/profile_all.svg" alt="" width="20px"></div><div>Siaw Henry Nartey(KaliRocket)</div></div> <!--Pic and Name-->
                </td>
                <td>100wpm</td>
                <td class="text-custom_blue_text">30 minutes ago</td>
              </tr>
              <tr class="bg-border_color">
                <td class="bg-table_no">16</td>
                <td class="text-left">
                  <div class="flex flex-row gap-2"><div><img src="./assets/profile_all.svg" alt="" width="20px"></div><div>Siaw Henry Nartey(KaliRocket)</div></div> <!--Pic and Name-->
                </td>
                <td>100wpm</td>
                <td class="text-custom_blue_text">30 minutes ago</td>
              </tr>
              <tr>
                <td class="bg-table_no">17</td>
                <td class="text-left">
                  <div class="flex flex-row gap-2"><div><img src="./assets/profile_all.svg" alt="" width="20px"></div><div>Siaw Henry Nartey(KaliRocket)</div></div> <!--Pic and Name-->
                </td>
                <td>100wpm</td>
                <td class="text-custom_blue_text">30 minutes ago</td>
              </tr>
              <tr class="bg-border_color">
                <td class="bg-table_no">18</td>
                <td class="text-left">
                  <div class="flex flex-row gap-2"><div><img src="./assets/profile_all.svg" alt="" width="20px"></div><div>Siaw Henry Nartey(KaliRocket)</div></div> <!--Pic and Name-->
                </td></td>
                <td>100wpm</td>
                <td class="text-custom_blue_text">30 minutes ago</td>
              </tr>
              <tr>
                <td class="bg-table_no">19</td>
                <td class="text-left">
                  <div class="flex flex-row gap-2"><div><img src="./assets/profile_all.svg" alt="" width="20px"></div><div>Siaw Henry Nartey(KaliRocket)</div></div> <!--Pic and Name-->
                </td>
                <td>100wpm</td>
                <td class="text-custom_blue_text">30 minutes ago</td>
              </tr>
              <tr class="bg-border_color">
                <td class="bg-table_no">20</td>
                <td class="text-left">
                  <div class="flex flex-row gap-2"><div><img src="./assets/profile_all.svg" alt="" width="20px"></div><div>Siaw Henry Nartey(KaliRocket)</div></div> <!--Pic and Name-->
                </td>
                <td>100wpm</td>
                <td class="text-custom_blue_text">30 minutes ago</td>
              </tr>
            </table>
          </div> <!--Table data-->
          <div class="mb-6 ml-2 flex flex-row items-center">
            <div class="bg-sky-500 flex flex-row w-button2 h-10 items-center px-5 rounded-md">
              <div class="text-custom_white text-sm">Refresh</div>
              <div class="ml-4"><img src="./assets/refresh.png" alt=""></div>
            </div> <!--Refresh and icon-->
            <div class="italic ml-2 text-sm">
              Auto-updating in 0:00
            </div> <!--Timer-->
          </div> <!--Refresh Button and timer-->
        </div>
        <!--Latest high scores-->
        <div class="bg-school_bg rounded-md bg-school bg-no-repeat bg-cover flex flex-col p-4 mx-2 gap-3 mb-10 h-full hide-for-game">
          <div class="text-2xl text-custom_blue_text font-semibold">TypeRacer School Edition Features
        </div>
        <div class="text-sm font-semibold opacity-80">You get the same award-winning product as typeracer.com, with these additional benefits:</div>
        <div>
          <ul class="list-image-[url(./assets/list_style.png)] text-size_2 pl-5">
            <li>A private environment for your students, which they could access from home, school, or library.</li>
            <li>No advertisements will ever be shown to your students.</li>
            <li>No installation required - works on any computer with a web browser.
            </li>
          </ul>
        </div>
        <div class="bg-custom_green rounded-md py-2 pl-4 text-sm font-bold text-custom_white w-button1">More Info</div> <!--Button-->
        </div>
        <!--Typeracer School Edition....-->
      </div>
      <!--Main content-->
    </div>
    <div class="w-full mt-4 bg-custom_blue_bg_1 text-custom_white flex flex-col justify-center items-center gap-4 px-3 py-5 2xl:flex-row 2xl:justify-between 2xl:px-400">
        <div class=" flex flex-col items-center gap-4 px-3 py-5"><ul class="text-size_2 flex flex-wrap justify-center px-6">
          <li>Home |</li>
          <li>Terms of Service |</li>
          <li>Privacy Policy |</li>
          <li>Contact |</li>
          <li>Contribute |</li>
          <li>Keyboard Shortcuts |</li>
          <li>FAQ</li>
        </ul> <!--Links-->
        <div class="text-size_2">&copy; 2008-2023 Addicting Games, Inc.</div>
        <div class="flex flex-row justify-center items-center gap-4">
          <div><img src="./assets/discord_white.svg" alt="" width="25px"></div> <!--Discord-->
          <div><img src="./assets/facebook_white.svg" alt="" width="25px"></div><!--Facebook-->
          <div><img src="./assets/tiktok_white.svg" alt="" width="25px"></div><!--Tiktok-->
          <div><img src="./assets/youtube_white.svg" alt="" width="25px"></div><!--Youtube-->
          <div><img src="./assets/twitter_white.svg" alt="" width="25px"></div><!--Twitter-->
          
        </div> <!--Socials--></div> <!--Links and something wrapper-->
        <div class="flex flex-col items-center gap-4 px-3 py-5"><div class="flex flex-row rounded-md bg-sky-500 h-change_theme_button justify-center items-center gap-8 theme:h-change_theme_button2 px-100 md:px-200 xl:px-100 -mt-8">
          <div class="flex flex-col text-size_1 items items-center justify-center font-bold text-custom_white pl-8 theme:flex-row gap-1 theme:pl-0">
            <div>Change</div>
            <div class="-mt-2 theme:-mt-0">Theme</div>
          </div>
          <div><img src="./assets/theme_button.png" alt=""></div>
      </div> <!--Theme Change-->
        <div class="-mt-2"><img src="./assets/addicting_games.png" alt="" width="100px"></div> <!--Addicting games link--></div> <!--Change theme and additing games pic-->
      </div> <!--Footer-->
      <div class="invisible bg-custom_blue_bg_2 w-sidebar fixed top-0 right-0 h-full shadow-xl shadow-black  flex flex-col justify-start px-8 gap-y-6" id="toggle-hide-show">
        <button class="mt-4 -mr-3 flex justify-end items-end "><img src="./assets/close.png" alt="" width="20px" onclick="hide()"></button> <!--Close Button-->
        <div class="flex flex-col gap-1">
          <div class="text-custom_white"><a href="./pitstop.php">Pit Stop</a></div>
        <hr>
        <div class="text-custom_white">Updates</div>
        <hr>
        <div class="text-custom_white">Discord</div>
        <hr>
        <div class="text-custom_white">About</div>
        <hr>
        <div class="text-custom_white">Merch</div>
        </div> <!--Links Wrapper-->
        <div class="h-profilemini bg-white rounded-lg px-2">
          <div class="flex flex-col justify-center items-center mt-2">
            <div class="h-profile_height w-profile_width rounded-full border-black shadow-md"></div> <!--Profile Icon-->
            <div class="text-custom_blue_bg_2 font-bold">Guest</div> <!--Profilename-->
            <div class="flex flex-row justify-center items-center gap-1">
              <div class="text-custom_blue_bg_2 font-bold">Sign In</div>
              <div class="mt-1"><img src="./assets/profile_pic.png" alt=""></div>
            </div> <!--Sign Out-->
          </div> <!--Profile-->
          <div class="text-size_2 font-bold opacity-90">
            <hr class="opacity-100 h-hr_h bg-gray-300">
            <div>Skill Level</div>
            <div class="text-custom_blue_bg_2">Average</div>
            <hr class="opacity-100 h-hr_h bg-gray-300">
            <div>Avg. Speed</div>
            <div class="text-custom_blue_bg_2">0 WPM</div>
            <hr class="opacity-100 h-hr_h bg-gray-300">
            <div>Races</div>
            <div class="text-custom_blue_bg_2">0</div>
            <hr class="opacity-100 h-hr_h bg-gray-300">
            <div>Points</div>
            <div class="text-custom_blue_bg_2">0</div>
        </div> <!--Info-->
        </div> <!--Mini profile-->
      </div> <!--Sidebar--></div> <!--All items wrapper-->

    <script src="./script.js"></script>
  </body>
</html>