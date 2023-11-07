<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="Images/favicon.ico">
    <link rel="stylesheet" href="homecss.css">
    <link href="https://fonts.googleapis.com/css2?family=Urbanist&display=swap" rel="stylesheet">
    <title>Vitawise Homepage</title>
</head>
<style>
      #greeting{
            width: 100%;
            color: var(--mindful-gray-80, #4b3425);
            font: 700 34px/80px 'Urbanist', sans-serif;
            display: flex;
            margin-left: 75%;
            margin-top: 70px;
           }
           a{
            text-decoration: none;
           }
</style>
<body>

    <!-- Homepage -->
    <div class="max" >
        <div class="heading" >
                <div class="heading2" >
                    <span>
                            <span class="heading-2-span">Your Path to Wellness </span>
                            <span class="heading-2-span2">Knowledge&nbsp;and Essentials&nbsp;for&nbsp;a Healthier&nbsp;You&nbsp;!</span>
                    </span>
                </div>
                <!-- For more settings use the AutoHTML plugin tab ... --> 
<svg class="marker-home" width="361" height="63" viewBox="0 0 361 63" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M357.263 40.9877C361.745 39.6291 363.148 18.8774 346.656 11.172C286.703 -12.3991 7.15113 39.298 1.17295 40.747C-3.30946 42.1055 7.18045 45.8227 13.1635 45.4612C17.6508 45.1901 240.466 19.7631 357.263 40.9877Z" fill="#FFD2C2"/>
</svg>

        </div>
    </div>
    <div class="home-text2" >
<b>Empowering Your Health Journey: Access Expert Articles, Discover Quality Products, and Achieve Your Wellness Goals with Confidence</b></div>


<!-- For more settings use the AutoHTML plugin tab ... --> 
<div class="rec" >
    <div class="rectangle-2601" >
    </div>
    <div class="yourdot" >
    </div>
    <div class="your">
    Maximize your health</div>
</div>
<!-- For more settings use the AutoHTML plugin tab ... --> 
<div class="logos-combined" >
<div class="yoga-pose" >
      <img class="image-2" src="Images/image 2 (1).png" />
      <div class="rectangle-1359" >
      </div>
</div>
<div class="pink-vitawise" >
      <div class="pink-logo" >
            <img class="image-1" src="Images/image 1.png" />
      </div>
      <div class="group" >
            <div class="rectangle-1358" >
            </div>
            <div class="vita-wise1" >
                &nbsp;&nbsp;&nbsp;&nbsp;VitaWise</div>
      </div>
</div>
<img class="image-3" src="Images/image 3.png" />
<img class="image-6" src="Images/image 6.png" />
<img class="image-7" src="Images/image 7.png" />
</div>
<!-- <div class="greeting">
 
  </div> -->
  <div id="greeting">
      <h3>Hello,&nbsp;</h3>
      <h3 id="UserName">
      <?php 
            session_start();
            $connect = mysqli_connect("localhost", "root", "", "vitareg") or die(mysqli_error($connect));
            $conn ="SELECT * FROM vitappl";
            $query=mysqli_query($connect,$conn);
            $result=mysqli_fetch_assoc($query);
            echo $result['Username'];
      ?>
      </h3>
  </div>

<!-- For more settings use the AutoHTML plugin tab ... --> 
<!-- Features -->
<div class="content" >
<!-- For more settings use the AutoHTML plugin tab ... --> 
<svg class="bg" width="3101" height="3395" viewBox="0 0 3101 3395" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M328.826 844.91C377.261 384.082 790.101 49.7706 1250.93 98.2056C1711.76 146.641 2046.07 559.48 1997.63 1020.31C1949.2 1481.14 1536.36 1815.45 1075.53 1767.01C614.702 1718.58 280.391 1305.74 328.826 844.91Z" stroke="#9BB068" stroke-width="2"/>
<path d="M932.082 2567.4C968.393 2221.92 1277.9 1971.29 1623.38 2007.6C1968.87 2043.91 2219.5 2353.42 2183.19 2698.9C2146.88 3044.38 1837.37 3295.02 1491.89 3258.71C1146.4 3222.39 895.77 2912.89 932.082 2567.4Z" stroke="#9BB068" stroke-width="2"/>
<path d="M465.732 2699.38C477.797 2584.58 580.638 2501.31 695.433 2513.37C810.228 2525.44 893.507 2628.28 881.442 2743.07C869.376 2857.87 766.535 2941.15 651.74 2929.08C536.945 2917.02 453.666 2814.18 465.732 2699.38Z" stroke="#9BB068" stroke-width="2"/>
<path d="M1029.34 1929.07C1035.34 1871.95 1086.52 1830.51 1143.64 1836.51C1200.76 1842.52 1242.2 1893.69 1236.2 1950.81C1230.19 2007.94 1179.02 2049.38 1121.9 2043.37C1064.77 2037.37 1023.33 1986.2 1029.34 1929.07Z" stroke="#9BB068" stroke-width="2"/>
<path d="M2034.25 1552.05C2040.26 1494.93 2091.43 1453.49 2148.55 1459.49C2205.68 1465.49 2247.12 1516.67 2241.11 1573.79C2235.11 1630.91 2183.94 1672.35 2126.81 1666.35C2069.69 1660.35 2028.25 1609.17 2034.25 1552.05Z" stroke="#9BB068" stroke-width="2"/>
<path d="M1649.57 1768.02C1661.64 1653.23 1764.48 1569.95 1879.27 1582.01C1994.07 1594.08 2077.35 1696.92 2065.28 1811.72C2053.21 1926.51 1950.37 2009.79 1835.58 1997.72C1720.78 1985.66 1637.5 1882.82 1649.57 1768.02Z" stroke="#9BB068" stroke-width="2"/>
<path d="M2247.99 2675.55C2260.05 2560.75 2362.89 2477.47 2477.69 2489.54C2592.48 2501.6 2675.76 2604.44 2663.7 2719.24C2651.63 2834.03 2548.79 2917.31 2434 2905.25C2319.2 2893.18 2235.92 2790.34 2247.99 2675.55Z" stroke="#9BB068" stroke-width="2"/>
<path d="M113.885 2028.93C138.074 1798.79 344.248 1631.83 574.387 1656.02C804.527 1680.21 971.483 1886.38 947.294 2116.52C923.106 2346.66 716.932 2513.62 486.792 2489.43C256.653 2465.24 89.6964 2259.07 113.885 2028.93Z" stroke="#9BB068" stroke-width="2"/>
<path d="M2081.43 1964.24C2105.61 1734.1 2311.79 1567.14 2541.93 1591.33C2772.07 1615.52 2939.02 1821.69 2914.83 2051.83C2890.65 2281.97 2684.47 2448.93 2454.33 2424.74C2224.19 2400.55 2057.24 2194.38 2081.43 1964.24Z" stroke="#9BB068" stroke-width="2"/>
</svg>

<div class="mainfeature" >
      <div class="intro" >
            <div class="label-fill" >
                  <div class="label-plain" >
                        <div class="featuredot" >
                        </div>
                        <div class="our"><b>our Features</b></div>
                  </div>
            </div>
            <div class="featureheading">
                    <div class="freud-ai-app-features" >
                    VitaWise Features </div>
                          </div>
              </div>
      <div class="features" >
            <div class="row" >
                  <div class="card" >
                        <div class="content2" >
                              <div class="text2" >
                                    <svg class="superego-04-heatbeat" width="97" height="96" viewBox="0 0 97 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <g clip-path="url(#clip0_29_2635)">
                                                <rect x="0.5" width="96" height="96" rx="48" fill="#E5EAD7"/>
                                                <path d="M58.5 22C48.5589 12.0589 32.4411 12.0589 22.5 22C12.5589 31.9411 12.5589 48.0589 22.5 58L64.5 100L106.5 58C116.441 48.0589 116.441 31.9411 106.5 22C96.5589 12.0589 80.4411 12.0589 70.5 22L64.5 28L58.5 22Z" fill="#9BB068"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M44.5 36.9443L40.5 44.9443C37.1122 51.72 30.1869 56 22.6115 56H-3.5V48H22.6115C27.1567 48 31.3119 45.432 33.3446 41.3666L40.239 27.5777C41.3353 25.3851 43.5764 24 46.0279 24C49.6023 24 52.5 26.8977 52.5 30.4721V67.0557L56.5 59.0557C59.8878 52.28 66.8131 48 74.3885 48H108.5V56H74.3885C69.8433 56 65.6881 58.568 63.6554 62.6334L56.761 76.4223C55.6647 78.6149 53.4236 80 50.9721 80C47.3977 80 44.5 77.1023 44.5 73.5279V36.9443Z" fill="#4B3425"/>
                                          </g>
                                          <defs>
                                                <clipPath id="clip0_29_2635">
                                                      <rect x="0.5" width="96" height="96" rx="48" fill="white"/>
                                                </clipPath>
                                          </defs>
                                    </svg>
                                    <div class="text3" >
                                          <div class="heading2" >
Symptom Checker </div>
                                          <div class="text4" >
Just answer a few questions, and it 
<br>provides personalized insights, helping you 
<br>take the next steps in your healthcare <br> journey
with confidence. </div>
                                    </div>
                              </div>
                        </div>
                        <div class="s-learnmore">
                          <div class="text-sy">Learn More</div>
                          <div class="button-icon-sy">
                                <a href="https://labinatorsolutions.github.io/medical-symptom-checker/">  
                            <svg
                              class="monotone-04-arrow-right-sm-sy"
                              width="25"
                              height="24"
                              viewBox="0 0 25 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M2.5 12L21.5 12"
                                stroke="#4B3425"
                                stroke-width="2"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M17.0529 17.7956C18.3287 17.4537 19.4561 16.7004 20.2601 15.6526C21.0642 14.6047 21.5 13.3208 21.5 12C21.5 10.6792 21.0642 9.3953 20.2601 8.34743C19.4561 7.29957 18.3287 6.54629 17.0529 6.20445"
                                stroke="#4B3425"
                                stroke-width="2"
                                stroke-linejoin="round"
                              />
                            </svg>
                          </a>  
                          </div>
                        </div>
                        
                  </div>
                  <div class="card2" >
                        <div class="content2" >
                              <div class="text2" >
                                    <svg class="superego-03-control" width="97" height="96" viewBox="0 0 97 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <g clip-path="url(#clip0_29_2650)">
                                                <rect x="0.5" width="96" height="96" rx="48" fill="#E5EAD7"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M96.5 68L0.499999 68L0.5 76L96.5 76L96.5 68Z" fill="#9BB068"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M96.5 44L0.499999 44L0.5 52L96.5 52L96.5 44Z" fill="#4B3425"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M96.5 20L0.499999 20L0.5 28L96.5 28L96.5 20Z" fill="#9BB068"/>
                                                <rect width="16" height="16" rx="8" transform="matrix(4.37114e-08 1 1 -4.37114e-08 64.5 16)" fill="#4B3425"/>
                                                <rect width="16" height="16" rx="8" transform="matrix(4.37114e-08 1 1 -4.37114e-08 40.5 40)" fill="#9BB068"/>
                                                <rect width="16" height="16" rx="8" transform="matrix(4.37114e-08 1 1 -4.37114e-08 16.5 64)" fill="#4B3425"/>
                                          </g>
                                          <defs>
                                                <clipPath id="clip0_29_2650">
                                                      <rect x="0.5" width="96" height="96" rx="48" fill="white"/>
                                                </clipPath>
                                          </defs>
                                    </svg>
                                    <div class="text3" >
                                          <div class="heading2" >
Connect with Professionals </div>
                                          <div class="text4" >
Connect with experienced healthcare 
<br>professionals. Get personalized guidance <br>
and recommendations to address your 
<br>health needs with confidence. </div>
                                    </div>
                              </div>
                        </div>
                        <div class="p-learnmore">
                          <div class="text-c">Learn More</div>
                          <div class="button-icon-c">
                            <a href="Expert.html">
                            <svg
                              class="monotone-04-arrow-right-sm-c"
                              width="25"
                              height="24"
                              viewBox="0 0 25 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M2.5 12L21.5 12"
                                stroke="#4B3425"
                                stroke-width="2"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M17.0529 17.7956C18.3287 17.4537 19.4561 16.7004 20.2601 15.6526C21.0642 14.6047 21.5 13.3208 21.5 12C21.5 10.6792 21.0642 9.3953 20.2601 8.34743C19.4561 7.29957 18.3287 6.54629 17.0529 6.20445"
                                stroke="#4B3425"
                                stroke-width="2"
                                stroke-linejoin="round"
                              />
                            </svg>
                            </a>
                          </div>
                        </div>
                        
                  </div>
                  <div class="card3" >
                        <div class="content2" >
                              <div class="text2" >
                                    <svg class="superego-30-microsope" width="97" height="96" viewBox="0 0 97 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <g clip-path="url(#clip0_29_2669)">
                                                <rect x="0.5" width="96" height="96" rx="48" fill="#E5EAD7"/>
                                                <rect x="31.5723" y="9.60742" width="16" height="24" transform="rotate(30 31.5723 9.60742)" fill="#9BB068"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M65.3974 20.8255C60.3254 17.6716 54.4719 16 48.4992 16V0C57.4582 0 66.2385 2.50733 73.8465 7.2383C81.4545 11.9693 87.5866 18.735 91.5491 26.7701C95.5116 34.8052 97.1462 43.7889 96.2681 52.7048C95.3899 61.6207 92.0341 70.1129 86.5802 77.2206C81.1263 84.3282 73.792 89.7677 65.4072 92.9235C57.0224 96.0793 47.9217 96.8255 39.1349 95.0777C30.348 93.3299 22.2256 89.1578 15.6868 83.0335C9.1479 76.9091 4.45353 69.077 2.13477 60.4233L17.5896 56.2822C19.1354 62.0514 22.265 67.2728 26.6242 71.3556C30.9835 75.4385 36.3984 78.2199 42.2563 79.3851C48.1142 80.5503 54.1813 80.0529 59.7712 77.949C65.3611 75.8451 70.2506 72.2188 73.8865 67.4804C77.5225 62.7419 79.7597 57.0805 80.3451 51.1366C80.9305 45.1926 79.8408 39.2035 77.1991 33.8468C74.5575 28.49 70.4694 23.9795 65.3974 20.8255Z" fill="#9BB068"/>
                                                <rect x="42.6445" y="-24.7842" width="32" height="48" transform="rotate(30 42.6445 -24.7842)" fill="#4B3425"/>
                                                <rect x="-3.5" y="52" width="40" height="16" fill="#4B3425"/>
                                          </g>
                                          <defs>
                                                <clipPath id="clip0_29_2669">
                                                      <rect x="0.5" width="96" height="96" rx="48" fill="white"/>
                                                </clipPath>
                                          </defs>
                                    </svg>
                                    <div class="text3" >
                                          <div class="heading2" >
Articles </div>
                                          <div class="text4" >
Explore our library of expert-written 
<br>health articles. From specific conditions to 
<br>wellness tips, find the information you 
<br>need to make informed decisions about 
<br>your health and well-being. </div>
                                    </div>
                              </div>

                        </div>
                        <div class="a-learnmore">
                          <div class="text-a">Learn More</div>
                          <div class="button-icon-a">
                              <a href="articles.html">
                            <svg
                              class="monotone-04-arrow-right-sm-a"
                              width="25"
                              height="24"
                              viewBox="0 0 25 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M2.5 12L21.5 12"
                                stroke="#4B3425"
                                stroke-width="2"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M17.0529 17.7956C18.3287 17.4537 19.4561 16.7004 20.2601 15.6526C21.0642 14.6047 21.5 13.3208 21.5 12C21.5 10.6792 21.0642 9.3953 20.2601 8.34743C19.4561 7.29957 18.3287 6.54629 17.0529 6.20445"
                                stroke="#4B3425"
                                stroke-width="2"
                                stroke-linejoin="round"
                              />
                            </svg>
                               </a>
                          </div>
                        </div>
                        
                  </div>
            </div>
            <div class="row2" >
                  <div class="card4" >
                        <div class="content2" >
                              <div class="text2" >
                                    <div class="superego-22-bandaid-double" >
                                          <div class="vector21" >
                                          </div>
                                          <div class="vector22" >
                                          </div>
                                          <div class="vector23" >
                                                <div class="group-480" >
                                                      <div class="rectangle-1013" >
                                                      </div>
                                                </div>
                                                <div class="group-481" >
                                                      <div class="rectangle-10132" >
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="vector23" >
                                                <div class="group-480" >
                                                      <div class="rectangle-10133" >
                                                      </div>
                                                </div>
                                                <div class="group-481" >
                                                      <div class="rectangle-10134" >
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="vector24" >
                                          </div>
                                    </div>
                                    <div class="text3" >
                                          <div class="heading2" >
Health Calculator (BMI &amp; calorie) </div>
                                          <div class="text4" >
Use our Health Calculator tools to track 
<br>your progress, from calculating your BMI 
<br>for a healthier lifestyle to monitoring your 
<br>calorie intake. </div>
                                    </div>
                              </div>
                              <div class="cal-learnmore">
                                <div class="text-cal">Learn More</div>
                                <div class="button-icon-cal">
                                   <a href="Calories.html"> 
                                  <svg
                                    class="monotone-04-arrow-right-sm-cal"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                  >
                                    <path
                                      d="M2 12L21 12"
                                      stroke="#4B3425"
                                      stroke-width="2"
                                      stroke-linejoin="round"
                                    />
                                    <path
                                      d="M16.5529 17.7956C17.8287 17.4537 18.9561 16.7004 19.7601 15.6526C20.5642 14.6047 21 13.3208 21 12C21 10.6792 20.5642 9.3953 19.7601 8.34743C18.9561 7.29957 17.8287 6.54629 16.5529 6.20445"
                                      stroke="#4B3425"
                                      stroke-width="2"
                                      stroke-linejoin="round"
                                    />
                                  </svg>
                              </a>
                                </div>
                              </div>
                              
                        </div>
                  </div>
                  <div class="card5" >
                        <div class="content2" >
                              <div class="text2" >
                                    <div class="superego-05-mobile-phone" >
                                          <div class="vector26" >
                                          </div>
                                          <div class="vector27" >
                                          </div>
                                          <div class="vector28" >
                                          </div>
                                    </div>
                                    <div class="text3" >
                                          <div class="heading2" >
Health Tracker </div>
                                          <div class="text4" >
A health tracker with a built-in to-do list 
<br>helps you set and achieve your daily health 
<br>goals by providing a simple and organized 
<br>way to track your progress. </div>
                                    </div>
                              </div>
                              <div class="c-learnmore">
                                <div class="text-ch">Learn More</div>
                                <div class="button-icon-ch">
                                    <a href="tracker.html">
                                  <svg
                                    class="monotone-04-arrow-right-sm-ch"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                  >
                                    <path
                                      d="M2 12L21 12"
                                      stroke="#4B3425"
                                      stroke-width="2"
                                      stroke-linejoin="round"
                                    />
                                    <path
                                      d="M16.5529 17.7956C17.8287 17.4537 18.9561 16.7004 19.7601 15.6526C20.5642 14.6047 21 13.3208 21 12C21 10.6792 20.5642 9.3953 19.7601 8.34743C18.9561 7.29957 17.8287 6.54629 16.5529 6.20445"
                                      stroke="#4B3425"
                                      stroke-width="2"
                                      stroke-linejoin="round"
                                    />
                                  </svg>
                                  </a>
                                </div>
                              </div>
                        </div>
                        </div>
                  </div>
   
      </div>
</div>
</div>
<!-- For more settings use the AutoHTML plugin tab ... --> 
<div class="articles" >
<div class="homepage-latest-news" >
  <div class="article-container" >
      <div class="article-content-1" >
          <div class="article-intro" >
              <div class="article-label-fill" >
                  <div class="label-plain" >
                      <div class="psyche" >
                      </div>
                      <a href="articles.html"><div class="text" >
articles </div></a>
                  </div>
              </div>
              <div class="browse-our-latest-articles" >
Browse Our Latest Articles </div>
          </div>
         
          <div class="article-blog-post" >
            <a href="https://www.bayviewrx.com/post/understanding-the-basics-of-nutrition-a-guide-for-newbies-to-eating-healthy#:~:text=Eating%20healthily%20is%20essential%20to,unique%20vitamins%20and%20minerals%20that">
              <div class="article-blog-post-1" >
                  <div class="article-content" >
                      <div class="image-container" >
                        <img src="Images/image 30.png">
                      </div>
                      <div class="article-text2" >
                          <div class="metadata" >
                              <div class="tag" >
                                  <div class="pricing" >
                                    February 16, 2023 </div>
                              </div>
                              <div class="tag" >
                                  <div class="pricing" >
Health </div>
                              </div>
                              <div class="tag" >
                                  <div class="pricing" >
nutrition </div>
                              </div>
                          </div>
                          <div class="article-heading" >
<b>Understanding the Basics of Nutrition: A Comprehensive Guide. -By Ryan Dyer </b> </div>
                      </div>
                  </div>
              </div></a>  
              <a href="https://www.verywellhealth.com/stress-relief-strategies-5191480">
              <div class="article-blog-post-2" >
                  <div class="article-content" >
                      <div class="image-container" >
                        <img src="Images/image 31.png">
                      </div>
                      <div class="article-text2" >
                          <div class="metadata" >
                              <div class="tag" >
                                  <div class="pricing" >
                                    August 18, 2021</div>
                              </div>
                              <div class="tag" >
                                  <div class="pricing" >
stress </div>
                              </div>
                              <div class="tag" >
                                  <div class="pricing" >
lifestyle </div>
                              </div>
                          </div>
                          <div class="article-heading" >
<b>Stress Management Techniques for a Healthier Lifestyle.-By Michelle Pugle</b> </div>
                      </div>
                  </div>
              </div></a>
              <a href="https://www.betterup.com/blog/what-is-emotional-well-being">
              <div class="article-blog-post-3" >
                  <div class="article-content" >
                      <div class="image-container" >
                        <img src="Images/image 34.png">
                      </div>
                      <div class="article-text2" >
                          <div class="metadata" >
                              <div class="tag" >
                                  <div class="pricing" >
                                    February 11, 20211 </div>
                              </div>
                              <div class="tag" >
                                  <div class="pricing" >
Health </div>
                              </div>
                              <div class="tag" >
                                  <div class="pricing" >
sleep </div>
                              </div>
                          </div>
                          <div class="article-heading" >
<b>The Role of Sleep in Health: How to Improve Your Sleep Quality. -By Lois Melkonian February 11, 2021</b> </div>
                      </div>
                  </div>
              </div></a>
              <a href="https://www.sleepfoundation.org/how-sleep-works/benefits-of-sleep">
              <div class="article-blog-post-4" >
                  <div class="article-content" >
                      <div class="image-container" >
                        <img src="Images/image 32.png">
                      </div>
                      <div class="article-text2" >
                          <div class="metadata" >
                              <div class="tag" >
                                  <div class="pricing" >
                                    June 27, 2023 </div>
                              </div>
                              <div class="tag" >
                                  <div class="pricing" >
Health </div>
                              </div>
                              <div class="tag" >
                                  <div class="pricing" >
mental </div>
                              </div>
                          </div>
                          <div class="article-heading" >
<b>Mental Health Matters: Strategies for Emotional Well-Being. -By Jay Summer </b></div>
                      </div>
                  </div>
              </div>
          </div></a>
          <div class="article-button">
            <a href="sample.html">
              <div class="article-button-text" >
See All Articles </div></a>
              <a href="articles.html"><div class="article-button-icon" >
                  <svg class="monotone-04-arrow-right-sm" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M2.5 12L21.5 12" stroke="#9BB068" stroke-width="2" stroke-linejoin="round"/>
                      <path d="M17.0529 17.7956C18.3287 17.4537 19.4561 16.7004 20.2601 15.6526C21.0642 14.6047 21.5 13.3208 21.5 12C21.5 10.6792 21.0642 9.3953 20.2601 8.34743C19.4561 7.29957 18.3287 6.54629 17.0529 6.20445" stroke="#9BB068" stroke-width="2" stroke-linejoin="round"/>
                  </svg>
              </div></a>
          </div>
      </div>
  </div>
</div>
</div>
<div class="footer" >
<div class="rectangle-2602" >
</div>
<div class="copywrite-2023" >Copywrite@2023 </div>
<div class="terms-conditions" >Terms &amp; Conditions </div>
<div class="_1800-1234-12" >1800-1234-12 </div>
<div class="vita-wise-footer" ><img src="Images/Name.png"></div>
<div class="vitawise-gmail-com" >vitawise@gmail.com </div>
<div class="contact-us" >Contact Us </div>
<div class="come-visit-us" >Come Visit Us: </div>
<div class="connect-with-us" >Connect With Us: </div>
<div class="footer-logo">
  <a href="#"><svg class="streamline-computer-logo-facebook-1-media-facebook-social" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_242_391)">
              <path d="M1.78564 44.6428V5.35713C1.78564 4.40993 2.16192 3.50153 2.83169 2.83175C3.50146 2.16198 4.40987 1.78571 5.35707 1.78571H44.6428C45.59 1.78571 46.4984 2.16198 47.1682 2.83175C47.8379 3.50153 48.2142 4.40993 48.2142 5.35713V44.6428C48.2142 45.59 47.8379 46.4985 47.1682 47.1682C46.4984 47.838 45.59 48.2143 44.6428 48.2143H33.9285V31.2857H36.4642C37.042 31.2857 37.5961 31.0562 38.0047 30.6476C38.4133 30.2391 38.6428 29.6849 38.6428 29.1071V26.3571C38.6428 25.7793 38.4133 25.2252 38.0047 24.8167C37.5961 24.4081 37.042 24.1786 36.4642 24.1786H34.0714V20.8214C34.0714 17.8214 35.4285 17.8214 36.7856 17.8214H38.5356C38.8231 17.8333 39.1096 17.7818 39.375 17.6707C39.6403 17.5597 39.8781 17.3916 40.0714 17.1786C40.2789 16.981 40.4432 16.7425 40.5539 16.4781C40.6645 16.2138 40.7191 15.9294 40.7142 15.6428V13C40.7237 12.7092 40.6759 12.4193 40.5733 12.147C40.4708 11.8747 40.3155 11.6253 40.1165 11.413C39.9175 11.2007 39.6786 11.0298 39.4135 10.9099C39.1484 10.79 38.8622 10.7235 38.5714 10.7143H34.4642C33.2658 10.6692 32.0719 10.8849 30.965 11.3463C29.8581 11.8077 28.8645 12.5039 28.0529 13.3868C27.2413 14.2697 26.631 15.3182 26.2643 16.46C25.8975 17.6018 25.7829 18.8096 25.9285 20V24.1786H23.6428C23.3537 24.1738 23.0666 24.2267 22.7981 24.334C22.5297 24.4414 22.2853 24.6011 22.0792 24.8039C21.8731 25.0067 21.7094 25.2484 21.5977 25.5151C21.486 25.7818 21.4285 26.068 21.4285 26.3571V29.1071C21.4285 29.3963 21.486 29.6825 21.5977 29.9492C21.7094 30.2158 21.8731 30.4576 22.0792 30.6604C22.2853 30.8632 22.5297 31.0229 22.7981 31.1302C23.0666 31.2376 23.3537 31.2904 23.6428 31.2857H25.9285V48.2143H5.35707C4.40987 48.2143 3.50146 47.838 2.83169 47.1682C2.16192 46.4985 1.78564 45.59 1.78564 44.6428Z" stroke="#4B3425" stroke-width="3.57143" stroke-linecap="round" stroke-linejoin="round"/>
        </g>
        <defs>
              <clipPath id="clip0_242_391">
                    <rect width="50" height="50" fill="white"/>
              </clipPath>
        </defs>
  </svg></a>
  <a href="#"><svg class="streamline-computer-logo-google-media-google-social" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M40.5712 20.8214H31.6784C31.4361 20.8214 31.1963 20.8696 30.973 20.9634C30.7496 21.0571 30.5472 21.1945 30.3776 21.3675C30.208 21.5404 30.0746 21.7454 29.9852 21.9705C29.8958 22.1957 29.8522 22.4364 29.8569 22.6785V27.7143C29.8569 28.1973 30.0488 28.6606 30.3904 29.0022C30.732 29.3438 31.1953 29.5357 31.6784 29.5357H36.2855C36.3113 30.9161 36.0458 32.2865 35.5063 33.5574C34.9668 34.8282 34.1653 35.9711 33.1543 36.9113C32.1433 37.8516 30.9454 38.5681 29.6388 39.0141C28.3321 39.4602 26.9461 39.6257 25.5712 39.5C17.5712 39.5 13.7141 32.7143 13.7141 25C13.7141 17.2857 17.8569 10.5 25.5712 10.5C28.9769 10.387 32.3141 11.4741 34.9998 13.5714C35.2144 13.7119 35.4574 13.8035 35.7114 13.8396C35.9653 13.8758 36.2242 13.8557 36.4695 13.7808C36.7149 13.7058 36.9407 13.5778 37.1311 13.4058C37.3215 13.2339 37.4717 13.0222 37.5712 12.7857L39.8212 7.64283C40.0063 7.26378 40.054 6.83224 39.9563 6.42189C39.8586 6.01155 39.6215 5.64783 39.2855 5.39283C35.19 2.94389 30.4845 1.70559 25.7141 1.82141C12.7141 1.78569 3.85693 11.8928 3.85693 25C3.85693 38.1071 12.7498 48.2143 25.5712 48.2143C38.3926 48.2143 46.1426 39.0714 46.1426 26.7857C46.1426 22.8571 44.5712 20.8214 40.5712 20.8214Z" stroke="#4B3425" stroke-width="3.57143" stroke-linecap="round" stroke-linejoin="round"/>
  </svg></a>
  <a href="#"><svg class="mdi-instagram" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M16.2498 4.16669H33.7498C40.4165 4.16669 45.8332 9.58335 45.8332 16.25V33.75C45.8332 36.9547 44.5601 40.0282 42.294 42.2942C40.028 44.5603 36.9545 45.8334 33.7498 45.8334H16.2498C9.58317 45.8334 4.1665 40.4167 4.1665 33.75V16.25C4.1665 13.0453 5.43957 9.97188 7.70563 7.70581C9.97169 5.43975 13.0451 4.16669 16.2498 4.16669ZM15.8332 8.33335C13.844 8.33335 11.9364 9.12353 10.5299 10.5301C9.12335 11.9366 8.33317 13.8442 8.33317 15.8334V34.1667C8.33317 38.3125 11.6873 41.6667 15.8332 41.6667H34.1665C36.1556 41.6667 38.0633 40.8765 39.4698 39.47C40.8763 38.0635 41.6665 36.1558 41.6665 34.1667V15.8334C41.6665 11.6875 38.3123 8.33335 34.1665 8.33335H15.8332ZM35.9373 11.4584C36.628 11.4584 37.2904 11.7327 37.7788 12.2211C38.2671 12.7095 38.5415 13.3719 38.5415 14.0625C38.5415 14.7532 38.2671 15.4156 37.7788 15.9039C37.2904 16.3923 36.628 16.6667 35.9373 16.6667C35.2467 16.6667 34.5843 16.3923 34.0959 15.9039C33.6075 15.4156 33.3332 14.7532 33.3332 14.0625C33.3332 13.3719 33.6075 12.7095 34.0959 12.2211C34.5843 11.7327 35.2467 11.4584 35.9373 11.4584ZM24.9998 14.5834C27.7625 14.5834 30.412 15.6808 32.3655 17.6343C34.319 19.5878 35.4165 22.2373 35.4165 25C35.4165 27.7627 34.319 30.4122 32.3655 32.3657C30.412 34.3192 27.7625 35.4167 24.9998 35.4167C22.2372 35.4167 19.5876 34.3192 17.6341 32.3657C15.6806 30.4122 14.5832 27.7627 14.5832 25C14.5832 22.2373 15.6806 19.5878 17.6341 17.6343C19.5876 15.6808 22.2372 14.5834 24.9998 14.5834ZM24.9998 18.75C23.3422 18.75 21.7525 19.4085 20.5804 20.5806C19.4083 21.7527 18.7498 23.3424 18.7498 25C18.7498 26.6576 19.4083 28.2473 20.5804 29.4194C21.7525 30.5915 23.3422 31.25 24.9998 31.25C26.6574 31.25 28.2472 30.5915 29.4193 29.4194C30.5914 28.2473 31.2498 26.6576 31.2498 25C31.2498 23.3424 30.5914 21.7527 29.4193 20.5806C28.2472 19.4085 26.6574 18.75 24.9998 18.75Z" fill="#4B3425"/>
  </svg></a>
  <a href="#"><svg class="uil-linkedin" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M42.6457 4.16667H7.354C6.95729 4.16116 6.56338 4.23386 6.19477 4.3806C5.82615 4.52734 5.49005 4.74526 5.20567 5.02191C4.92128 5.29856 4.69417 5.62852 4.53732 5.99294C4.38047 6.35737 4.29694 6.74913 4.2915 7.14584V42.8542C4.29694 43.2509 4.38047 43.6426 4.53732 44.0071C4.69417 44.3715 4.92128 44.7015 5.20567 44.9781C5.49005 45.2547 5.82615 45.4727 6.19477 45.6194C6.56338 45.7662 6.95729 45.8388 7.354 45.8333H42.6457C43.0424 45.8388 43.4363 45.7662 43.8049 45.6194C44.1735 45.4727 44.5096 45.2547 44.794 44.9781C45.0784 44.7015 45.3055 44.3715 45.4624 44.0071C45.6192 43.6426 45.7027 43.2509 45.7082 42.8542V7.14584C45.7027 6.74913 45.6192 6.35737 45.4624 5.99294C45.3055 5.62852 45.0784 5.29856 44.794 5.02191C44.5096 4.74526 44.1735 4.52734 43.8049 4.3806C43.4363 4.23386 43.0424 4.16116 42.6457 4.16667ZM16.854 39.0417H10.604V20.2917H16.854V39.0417ZM13.729 17.6667C12.8671 17.6667 12.0404 17.3243 11.4309 16.7148C10.8214 16.1053 10.479 15.2786 10.479 14.4167C10.479 13.5547 10.8214 12.7281 11.4309 12.1186C12.0404 11.5091 12.8671 11.1667 13.729 11.1667C14.1867 11.1148 14.6502 11.1601 15.0892 11.2998C15.5281 11.4394 15.9326 11.6702 16.2762 11.977C16.6198 12.2838 16.8947 12.6598 17.0829 13.0802C17.2711 13.5006 17.3684 13.956 17.3684 14.4167C17.3684 14.8773 17.2711 15.3327 17.0829 15.7532C16.8947 16.1736 16.6198 16.5495 16.2762 16.8563C15.9326 17.1632 15.5281 17.3939 15.0892 17.5336C14.6502 17.6732 14.1867 17.7186 13.729 17.6667ZM39.3957 39.0417H33.1457V28.9792C33.1457 26.4583 32.2498 24.8125 29.979 24.8125C29.2762 24.8177 28.5919 25.0381 28.0182 25.4441C27.4446 25.8501 27.0092 26.4222 26.7707 27.0833C26.6076 27.573 26.537 28.0887 26.5623 28.6042V39.0208H20.3123V20.2708H26.5623V22.9167C27.1301 21.9315 27.9559 21.1198 28.9508 20.5692C29.9456 20.0185 31.0719 19.7497 32.2082 19.7917C36.3748 19.7917 39.3957 22.4792 39.3957 28.25V39.0417Z" fill="#4B3425"/>
  </svg></a>
  <a href="#"><svg class="simple-icons-x" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_242_401)">
              <path d="M39.3771 2.4021H47.0437L30.2937 21.5479L50 47.5958H34.5708L22.4875 31.7958L8.65833 47.5958H0.9875L18.9042 27.1167L0 2.40418H15.8208L26.7437 16.8458L39.3771 2.4021ZM36.6875 43.0083H40.9354L13.5125 6.75002H8.95417L36.6875 43.0083Z" fill="#4B3425"/>
        </g>
        <defs>
              <clipPath id="clip0_242_401">
                    <rect width="50" height="50" fill="white"/>
              </clipPath>
        </defs>
  </svg></a>
</div>
<div class="_123-health-avenue-wellnessville-healthland-54321-medi-care-nation" >123 Health Avenue<br/>Wellnessville, Healthland 54321<br/>MediCare Nation </div>
<div class="fa-qs" >FAQs </div>
</div>
    <!-- Header -->
    <div class="header">
        <div class="rectangle-1352">
        <div class="main">
            <a class="mainmenu" href="mainpanel.html">Main Menu</a>
            <div class="menudot"></div>
          </div>
        <div class="vita-wise">
            <img class="logo" src="Images/Logo.png">&nbsp;Vitawise</div>
      </div>
      <div class="icons">
        <div class="button-icon">
          <div class="monotone-46-email-1">
            <a href="ContactUs.html"><img src="Images/Mail.png"></a>
          </div>
        </div>
    </div>
    </div>
</body>
</html>