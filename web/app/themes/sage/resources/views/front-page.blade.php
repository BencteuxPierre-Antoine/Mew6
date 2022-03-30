@extends('layouts.app')

@section('content')
    <!-- @php echo 'Hello !'; @endphp

    <p>Data from filter : {{ $message }}</p>
    <p>Data from FrontPage Controller : {{ $hello_world }}</p>
    <p>Data from App Controller : {{App::getHeaderLogo()}}</p> -->

    <!-- <div class="start relative white">
          <img class="backG" src="<?php echo get_template_directory_uri(); ?>/assets/images/backG.jpg">
        <div class="relative">
          <div class="relative leftP topP s42"> DISCOVER OVER 70 MILLION <br> TRACKS </div>
          <div class="relative leftP topP s20"> The richest Hi-res catalogue available for streaming <br> and download </div>
          <div class="relative leftP topP s20"> From 10$ / month </div>
          <button class="relative leftP topP button-pink"> TRY FOR FREE </button>
        </div>
    </div>

    <div class="victories relative white">
        <p class="relative s42" style="top: -20px;"> LISTEN VICTORIES OF MUSIC <p>
        <div class="flex">
            <div class="cards cards-space">
                <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/stromae.jpg">
                <div class="card-txt backG-White">
                    <div class="flex relative card-txt-left card-txt-top">
                        <p class="s24 bold"> STROMAE </p>
                        <p class="relative card-txt-title s20"> Multitude </p>
                    </div>
                    <p class="date relative card-txt-left s20"> 2021 </p>
                    <p class="relative card-txt-left s20"> Hip hop, Electronic</p>
                </div>
            </div>

            <div class="cards cards-space">
                <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/orelsan.jpg">
                <div class="card-txt backG-White">
                    <div class="flex relative card-txt-left card-txt-top">
                        <p class="s24 bold"> ORELSAN </p>
                        <p class="relative card-txt-title s20"> Civilisation </p>
                    </div>
                    <p class="date relative card-txt-left s20"> 2021 </p>
                    <p class="relative card-txt-left s20"> Hip hop, Rap</p>
                </div>
            </div>

            <div class="cards">
                <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/claraL.jpg">
                <div class="card-txt backG-White">
                    <div class="flex relative card-txt-left card-txt-top">
                        <p class="s24 bold"> CLARA LUCIANI </p>
                        <p class="relative card-txt-title s20"> Coeur </p>
                    </div>
                    <p class="date relative card-txt-left s20"> 2021 </p>
                    <p class="relative card-txt-left s20"> Hip hop, Electronic</p>
                </div>
            </div>
        </div>

        <button class="relative button-blue"> DISCOVER OUR PLANS </button>
    </div>

    <div class="dlApp flex relative backG-White">
        <div class="dlApp-txt relative blue">
            <p class="s42 bold darkBlue"> LISTEN TO YOUR FAVOURITE <br> MUSIC AT ANY TIME </p>
            <p class="darkBlue"> On mobile, computer, tablet... Choose how you listen </p>
            <button class="button-pink white"> DOWNLOAD OUR APPS </button>
        </div>
        <img class="dlApp-img relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/mobile.png">
    </div>

    <div class="giftCard flex relative">
        <img class="gift-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/qobuz.png">
        <div class="gift-txt relative white">
            <p class="s42"> GIFT CARD FOR STREAMING <br> OR DOWNLOAD </p>
            <p class="s24"> Gift an unrivalled music experience. Streaming gift <br> cards available from 3 months. Store gift cards <br> available from 20$ </p>
            <button class="button-white"> GET YOUR GIFT CARD </button>
        </div>
    </div>

    <div class="Testimonials relative backG-White">
        <h2 class="relative s42 bold darkBlue"> USER TESTIMONIALS </h2>
        <div class="users flex relative">
            <div class="user relative">
                <img class="user-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/terminator.png">
                <p class="relative s20 bold darkBlue"> TERMINATOR </p>
                <p  class="relative"> <span class="pink"> ❝ </span> Cyborgs validate Mew6. <span class="pink"> ❞ </span> </p>
            </div>

            <div class="user relative">
                <img class="user-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/bob.png">
                <p class="relative s20 bold darkBlue"> SPONGEBOB </p>
                <p class="relative"> <span class="pink"> ❝ </span> Everyone uses and loves it <br> at Bikini Bottom! <span class="pink"> ❞ </span> </p>
            </div>

            <div class="user relative">
                <img class="user-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/spiderman.png">
                <p class="relative s20 bold darkBlue"> SPIDERMAN </p>
                <p class="relative"> <span class="pink"> ❝ </span> I I caught the green goblin <br> was listening to rock on Mew6. <span class="pink"> ❞ </span> </p>
            </div>
        </div>
    </div>

    <div class="FAQ relative">
        FREQUENTLY ASKED QUESTIONS
        <div>
            <p> Is the trial period really free for the streaming service? </p>
        </div>

        <div>
            <p> Do you need a subscription to download? </p>
        </div>

        <div>
            <p> Why listen to your music on Mew6? </p>
            <p> Mew6 offers the richest catalogue of Hi-Res music for streaming and download. Quench your thirst for discovery with our panoramas, reviews, original selections and exclusive interviews </p>
        </div> 
    </div>
 -->


    <style>
        body {
          background: #006BEA;

          margin: 0 auto;
        }

        .container{
          max-width: 100%;
        }

        .backG {
          position: absolute;
          width: 1446px;
          height: 889px;
          top: 46px;
          left: 0px;
        }

        .relative{
          position: relative;
        }

        .white{
          color: white;
        }

        .black{
          color: black;
        }

        .pink{
          color: #EC2C7B;
        }

        .darkBlue{
          color: #00184A;
        }

        .bold{
          font-style: bold;
        }

        .s42{
          font-size: 42px;
        }

        .s24{
          font-size: 24px;
        }

        .s20{
          font-size: 20px;
        }

        .leftP{
          left: 100px;
          width: 600px;
        }

        .topP{
          top: 240px;
          margin-top: 10px;
        }

        .button-pink{
          background-color: #EC2C7B;
          height: 50px;
          width: 200px;
          border-radius: 5px;
        }

        .button-blue{
          background-color: #001A49;
          height: 50px;
          width: 220px;
          border-radius: 5px;

          top: 15px;
          left: 40%;
        }

        .button-white{
          background-color: white;
          color: #001A49;
          height: 50px;
          width: 220px;
          border-radius: 5px;
        }

        .start {
          position: absolute;
          width: 1446px;
          height: 889px;
          top: 46px;
          left: 0px;
        }

        .victories{
          top: 1100px;
        }

            .card-txt{
              color: #00184A;
              border-radius: 0 0 5px 5px;
              height: 150px;
            }

                .card-txt-left{
                  left: 15px;
                }

                .card-txt-top{
                  top: 15px;
                }

                .card-txt-title{
                  top: 4px;
                  left: 15px;
                }

                .date{
                  background-color: #006BEA;
                  color: white;
                  width: 70px;
                  height: 30px;
                  border-radius: 5px;
                  padding-left: 13px;
                  margin-top: 10px;
                }

            .backG-White{
              background-color: white;
            }

            .cards-space{
              margin-right: 40px;
            }

        .dlApp{
          top: 1150px;
          left: -100px;
          width: 1448px;
          height: 1050px;  
        }

            .dlApp-txt{
              top: 200px;
              left: 100px;
            }

            .dlApp-img{
              height: 75%;
              top: 100px;
              left: 330px;
            }

        .giftCard{
          top: 1300px;
        }

            .gift-txt{
              left: 50px;
            }

        .Testimonials{
          top: 1450px;
          left: -100px;
          width: 1448px;
          height: 850px;
        }

            .Testimonials h2{
              top: 160px; 

              margin-left: 37%;
            }

            .users{
              top: 200px;
              justify-content: space-around;

              margin-left: 00px;
            }

                .user{
                  align-items: center;
                }

                .user p{
                  top: 30px;
                }

                    .user :nth-child(2){
                      left: 80px;
                    }

                    .user :nth-child(3){
                      left: 30px;
                    }

        .FAQ{
          top: 1600px;
        }
    </style>

@endsection
