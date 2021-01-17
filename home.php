<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style-nobleliving.css">
  <link rel="stylesheet" href="css/font.css">

</head>

<body>
  <div class="page" id="main">
    <div>
      <nav class="app-navbar">
        <div class="ribbon">
          <div class="strip color-1"></div>
          <div class="strip color-2"></div>
          <div class="strip color-3"></div>
          <div class="strip color-4"></div>
        </div>
        <div class="app-navbar-inner">
          <div class="i-avatar"></div><img class="app-logo" src="images/logo-noble_id.png">
          <ul class="app-lang">
            <li><a class="app-lang-link active" href="#">EN</a></li>
            <li><a class="app-lang-link" href="#">TH</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <div>
      <div class="box-unit">
        <div class="project" id="choose_unit">
          <div class="name">NUE Noble Fai Chai - Wang Lang</div>
          <div class="unit">Unit : 1035 / 946</div>
        </div>
        <div class="project-list" id="unit_list">
          <div class="list-item" id="unit_1">
            <div class="name">NUE Noble Fai Chai - Wang Lang</div>
            <div class="unit">Unit : 1035 / 946</div>
          </div>
          <div class="list-item" id="unit_2">
            <div class="name">NUE Noble Fai Chai - Wang Lang</div>
            <div class="unit">Unit : 1035 / 946</div>
          </div>
          <div class="list-item select" id="unit_3">
            <div class="name">NUE Noble Fai Chai - Wang Lang</div>
            <div class="unit">Unit : 1035 / 946</div>
          </div>
          <div class="list-item" id="unit_4">
            <div class="name">NUE Noble Fai Chai - Wang Lang</div>
            <div class="unit">Unit : 1035 / 946</div>
          </div>
        </div>
        <div id="fade"></div>
      </div>
    </div>
    <div>
      <div class="box-main">
        <!-- Tab -->

        <style>
          .box-main {
            margin-top: 160px;
          }

          .tab-container {
            padding-left: 16px;
            padding-right: 16px;

            display: flex;
            flex-direction: row;
            align-items: stretch;

            background-color: #FFF;
            border-bottom: 1px solid #EAEAEA;

          }

          .tab-container .tab-item {
            padding: 4px;
            width: 20%;
            min-width: 20%;
            max-width: 20%;

            position: relative;
            overflow: hidden;

            display: flex;
            flex-direction: column;
            align-items: center;
          }

          .tab-container .tab-item .nobleliving {
            background-image: url(./images/icon/nobleliving-inactive.svg);
            width: 32px;
            height: 32px;
            margin-bottom: 6px;
          }

          .tab-container .tab-item .mailbox {
            background-image: url(./images/icon/mailbox-inactive.svg);
            width: 32px;
            height: 32px;
            margin-bottom: 6px;
          }

          .tab-container .tab-item .aftersale {
            background-image: url(./images/icon/aftersale-inactive.svg);
            width: 32px;
            height: 32px;
            margin-bottom: 6px;
          }

          .tab-container .tab-item .retalresale {
            background-image: url(./images/icon/retalresale-inactive.svg);
            width: 32px;
            height: 32px;
            margin-bottom: 6px;
          }

          .tab-container .tab-item .resident {
            background-image: url(./images/icon/resident-inactive.svg);
            width: 32px;
            height: 32px;
            margin-bottom: 6px;
          }

          .tab-container .tab-item .label {
            margin-bottom: 4px;
            font-family: Med;
            font-size: 18px;
            line-height: 18px;
            text-align: center;
            color: #000;
            transition: .2s all;
          }

          .tab-container .tab-item::after {
            content: '';
            width: 100%;
            height: 4px;
            border-radius: 4px 4px 0 0;

            position: absolute;
            bottom: -4px;
            left: 0;
            background-color: #d26132;
            transition: .2s all;
          }

          .tab-container .tab-item.active::after {
            bottom: 0;
          }

          .tab-container .tab-item.active .nobleliving {
            background-image: url(./images/icon/nobleliving1-active.svg);
            width: 32px;
            height: 32px;
            margin-bottom: 6px;
          }

          .tab-container .tab-item.active .mailbox {
            background-image: url(./images/icon/mailbox-active.svg);
            width: 32px;
            height: 32px;
            margin-bottom: 6px;
          }

          .tab-container .tab-item.active .aftersale {
            background-image: url(./images/icon/aftersale-active.svg);
            width: 32px;
            height: 32px;
            margin-bottom: 6px;
          }

          .tab-container .tab-item.active .retalresale {
            background-image: url(./images/icon/retalresale1-active.svg);
            width: 32px;
            height: 32px;
            margin-bottom: 6px;
          }

          .tab-container .tab-item.active .resident {
            background-image: url(./images/icon/resident-active.svg);
            width: 32px;
            height: 32px;
            margin-bottom: 6px;
          }

          .tab-container .tab-item.active .label {
            color: #d26132;
          }
        </style>

        <div class="tab-container" id="tab-con">

          <div class="tab-item tablinks" onclick="openCity(event, 'NobleLiving')" id="defaultOpen">
            <div class="nobleliving"></div>
            <div class="label">Noble Living</div>
          </div>

          <div class="tab-item tablinks" onclick="openCity(event, 'tabMailBox')">
            <div class="mailbox"></div>
            <div class="label">Mail Box</div>
          </div>

          <div class="tab-item tablinks" onclick="openCity(event, 'tabAftersale')">
            <div class="aftersale"></div>
            <div class="label">Aftersale Service</div>
          </div>

          <div class="tab-item tablinks" onclick="openCity(event, 'tabRental')">
            <div class="retalresale"></div>
            <div class="label">Rental Resale</div>
          </div>

          <div class="tab-item tablinks" onclick="openCity(event, 'tabResidentInfo')">
            <div class="resident"></div>
            <div class="label">Resident Info</div>
          </div>

        </div>


        <!-- Content -->

        <div id="NobleLiving" class="tabcontent">
          Content Here.
        </div>


        <div id="tabMailBox" class="tabcontent">
          <section>
            <div class="btn-container">
              <button class="btn_notifi">
                <div class="label_notifi-btn">Notification</div>
              </button>
              <button class="btn_announement">
                <div class="label_notifi-btn">Announement</div>
              </button>
            </div>

          </section>
          <style>
            .btn-container {
              width: 100%;
              padding: 16px 16px 16px;
            }

            .btn_notifi {
              background-color: #d26132;
              color: #fff;
              width: 97px;
              height: 34px;
              margin: 0 8px 0 0;
              padding: 7px 8px;
              border-radius: 20px;
              border: solid 1px
            }

            .btn_announement {
              background-color: #f2f2f2;
              color: #000;
              /* width: 119px; */
              text-align: center;
              height: 34px;
              margin: 0 0 0 8px;
              padding: 7px 8px;
              border-radius: 20px;
              border: solid 0px;
            }

            .label_notifi-btn {
              font-family: Med;
              font-size: 20px;
              font-weight: normal;
              font-stretch: normal;
              font-style: normal;
              line-height: 1;
              letter-spacing: normal;
              text-align: center;
              color: var(--cement-10);
            }

            .label_announement {
              font-family: Med;
              font-size: 20px;
              font-weight: normal;
              font-stretch: normal;
              font-style: normal;
              line-height: 1;
              letter-spacing: normal;
              text-align: center;
              color: var(--base-black);
            }
          </style>

          <section>
            <div class="notifi-container tablinks" onclick="openCity(event, 'tabDetailMailBox');container_display();">
              <div>
                <span class="label_notifi"> <span style="color: #d26132;">●</span> ฟาสต์ฟู้ด ฟอร์มช็อตปิโตรเคมี
                  ซังเตตรวจทาน</span><span class="label_date">20/1/2021</span>
              </div>
              <div class="label-detail_notifi">แคมเปญ แชมป์ เยลลี่เกย์โหงวน็อกออร์เดอร์ บาบูน
                สหัชญาณแกสโซฮอล์สุริยยาตรแชมปิยองดิกชันนารี
              </div>
              <div>
                <span class="label_notified">ฟาสต์ฟู้ด ฟอร์มช็อตปิโตรเคมี ซังเตตรวจทาน</span><span class="label_date">20/1/2021</span>
              </div>
              <div class="label-detail_notified">แคมเปญ แชมป์ เยลลี่เกย์โหงวน็อกออร์เดอร์ บาบูน
                สหัชญาณแกสโซฮอล์สุริยยาตรแชมปิยองดิกชันนารี
              </div>
              <div>
                <span class="label_notified">ฟาสต์ฟู้ด ฟอร์มช็อตปิโตรเคมี ซังเตตรวจทาน</span><span class="label_date">20/1/2021</span>
              </div>
              <div class="label-detail_notified">แคมเปญ แชมป์ เยลลี่เกย์โหงวน็อกออร์เดอร์ บาบูน
                สหัชญาณแกสโซฮอล์สุริยยาตรแชมปิยองดิกชันนารี
              </div>
            </div>
          </section>

          <script>
            function container_display() {
              var x = document.getElementById("tab-con");
              if (x.style.display === "none") {
                x.style.display = "flex";
              } else {
                x.style.display = "none";
              }
            }
          </script>

          <style>
            .notifi-container {
              /* width: 100%; */
              height: 70px;
              margin-left: 16px;
              margin-right: 16px;
              /* padding: 0 16px; */
              border-bottom: 1px solid #f2f2f2;
            }

            .label_notifi {
              width: 100%;
              /* height: 40px; */
              margin: 0 8px 0 0;
              font-family: Med;
              font-size: 20px;
              font-weight: normal;
              font-stretch: normal;
              font-style: normal;
              line-height: 1;
              letter-spacing: normal;
              /* text-align: left; */
              color: var(--base-black);
            }

            .label_notified {
              width: 100%;
              /* height: 40px; */
              margin: 0 8px 0 16px;
              font-family: Med;
              font-size: 20px;
              font-weight: normal;
              font-stretch: normal;
              font-style: normal;
              line-height: 1;
              letter-spacing: normal;
              /* text-align: left; */
              color: #4d4d4d;
            }

            .label_date {
              /* width: 100%; */
              height: 18px;
              margin: 0 0 22px 18px;
              font-family: Reg;
              font-size: 18px;
              font-weight: normal;
              font-stretch: normal;
              font-style: normal;
              line-height: 1;
              letter-spacing: normal;
              /* text-align: left; */
              color: #808080;
              float: right;
            }

            .label-detail_notifi {
              width: 100%;
              height: 40px;
              margin: 2px 16px 16px;
              font-family: Reg;
              font-size: 20px;
              font-weight: normal;
              font-stretch: normal;
              font-style: normal;
              line-height: 1;
              letter-spacing: normal;
              text-align: left;
              color: #4d4d4d;
              /* border-bottom: 3px solid #f2f2f2; */
            }

            .label-detail_notified {
              width: 100%;
              height: 40px;
              margin: 2px 16px 16px;
              font-family: Reg;
              font-size: 20px;
              font-weight: normal;
              font-stretch: normal;
              font-style: normal;
              line-height: 1;
              letter-spacing: normal;
              text-align: left;
              color: #808080;
              /* border-bottom: 3px solid #f2f2f2; */
            }
          </style>

        </div>

        <style>
          .contailner-detail-mailbox {
            background-color: #fff;
            width: 100%;
            height: 60px;
            padding: 20px 16px;
            text-align: center;
            border-bottom: 2px solid#f2f2f2;
          }

          .frame-detail-mailbox {
            width: 100%;
            height: 40px;
            padding: 0 24px 0 0;
          }

          .frame-btn {
            float: left;
            display: inline-block;
            border-radius: 6px;
          }

          /* .icon-back {
            width: 24px;
            height: 24px;
            padding: 4px 0 8px 14.5px;
            color: #d26132
          } */

          .label-title-detail {
            width: 100%;
            font-family: Med;
            font-size: 20px;
            font-weight: normal;
            font-stretch: normal;
            font-style: normal;
            line-height: 1;
            letter-spacing: 0.2px;
            text-align: center;
            color: rgba(0, 0, 0, 0.8);
          }

          .frame-detail2-mailbox {
            width: 100%;
            height: 432px;
            padding: 16px;
          }



          .label-detail-notifi {
            width: 80%;
            height: 20px;
            margin: 0 8px 0 0;
            font-family: Med;
            font-size: 20px;
            font-weight: normal;
            font-stretch: normal;
            font-style: normal;
            line-height: 1;
            letter-spacing: normal;
            text-align: left;
            color: rgba(0, 0, 0, 0.4);
          }

          .label-detail-date {
            /* width: 20%; */
            float: right;
            height: 18px;
            margin: 0 0 2px 8px;
            font-family: Reg;
            font-size: 18px;
            font-weight: normal;
            font-stretch: normal;
            font-style: normal;
            line-height: 1;
            letter-spacing: normal;
            text-align: left;
            color: rgba(0, 0, 0, 0.4);
          }

          .title-deatil {
            width: 80%;
            height: 60px;
            margin: 8px 0 0;
            font-family: Med;
            font-size: 30px;
            font-weight: normal;
            font-stretch: normal;
            font-style: normal;
            line-height: 1;
            letter-spacing: normal;
            text-align: left;
            color: #000000;
          }

          .detail-detail {
            width: 100%;
            margin: 8px 0 0;
            font-family: Reg;
            font-size: 20px;
            font-weight: normal;
            font-stretch: normal;
            font-style: normal;
            line-height: 1;
            letter-spacing: normal;
            text-align: left;
            color: #4d4d4d;
          }

          .btn-delete {
            width: 100%;
            height: 48px;
            margin: 16px 0 0;
            padding: 12px 137.5px;
            border-radius: 8px;
            font-size: 20px;
            font-family: Bd;
            font-weight: normal;
            font-stretch: normal;
            font-style: normal;
            line-height: normal;
            letter-spacing: 0.4px;
            text-align: center;
            color: #d26132;
            background-color: #FFF;
            border: solid 0px;
          }
        </style>

        <div id="tabDetailMailBox" class="tabcontent">
          <div class="contailner-detail-mailbox">
            <div class="frame-detail-mailbox">
              <div class="frame-btn tablinks" onclick="openCity(event, 'tabMailBox') ; container_display();">Back</div>
              <span class="label-title-detail">NOTIFICATION</span>
            </div>
          </div>

          <section>
            <div class="frame-detail2-mailbox">
              <span class="label-detail-notifi">Notification</span>
              <span class="label-detail-date">20/1/2021</span>
              <div class="title-deatil">ฟาสต์ฟู้ด ฟอร์มช็อตปิโตรเคมี ซังเตตรวจทาน</div>
              <div class="detail-detail">สมาพันธ์ต่อรองเคลมพาร์ทเนอร์ดาวน์ ซูฮกวาไรตี้หล่อฮังก้วย นอมินีสุริยยาตร์ซูชิ
                กิมจิแครอท ภคันทลาพาธเอเซียแทกติคศิลปากร ราชบัณฑิตยสถานคอมเมนท์มั้ยซูชิกุนซือ โปรเจกเตอร์แบตสปอร์ต
              </div>
              <div class="detail-detail">เปปเปอร์มินต์วอลนัตนพมาศโฟน บ๊อกซ์คลับทัวร์นาเมนท์สตรอเบอร์รีติ่มซำ
                อุปสงค์กิมจิ แม็กกาซีนสุริยยาตร์พลาซ่านาฏยศาลาสเปก สติ๊กเกอร์แซนด์วิชพาเหรดสแควร์บุ๋น ชนะเลิศ
                สเตเดียมศิลปากร มิวสิคปาร์ตี้นพมาศสติ๊กเกอร์ดีพาร์ทเมนท์ มาร์ตโอเคมิลค์</div>
              <button class="btn-delete">DELETE</button>
            </div>

          </section>
        </div>


        <style>
          .AFTERSALE-SERVICE {
            width: 100%;
            height: 30px;
            margin: 0 0 8px;
            font-family: Bd;
            font-size: 30px;
            font-weight: bold;
            font-stretch: normal;
            font-style: normal;
            line-height: 1;
            letter-spacing: normal;
            text-align: left;
            color: #4d4d4d;
          }

          .textarea {
            width: 100%;
            height: 168px;
            padding: 8px 8px 136px;
            border-radius: 6px;
            background-color: rgba(0, 0, 0, 0.05);
            border: solid 0px;
          }

          .photo-frame {
            width: 100%;
            height: 52px;
            margin: 8px 0 0;
            padding: 8px 0;
            /* display: flex; */
          }

          .photo-label {
            width: 100%;
            height: 24px;
            margin: 6px 14px 6px 0;
            font-family: Bd;
            font-size: 24px;
            font-weight: bold;
            font-stretch: normal;
            font-style: normal;
            line-height: 1;
            letter-spacing: normal;
            text-align: left;
            color: #4d4d4d;
          }

          .label-upload {
            width: 46px;
            height: 20px;
            font-family: Med;
            font-size: 20px;
            font-weight: normal;
            font-stretch: normal;
            font-style: normal;
            line-height: 1;
            letter-spacing: normal;
            text-align: center;
            color: #3c4143;
          }

          .btn-upload {
            background-color: #ffffff;
            color: #3c4143;
            width: 102px;
            height: 36px;
            margin: 0 0 0 8px;
            border-radius: 32px;
            border: solid 1px #e5e5e5;
            font-family: Med;
            font-size: 20px;
            font-weight: normal;
            font-stretch: normal;
            font-style: normal;
            line-height: 1;
          }

          .frame-insert-image {
            /* width: 328px; */
            height: 194px;
            /* margin: 286px 0 0; */
            padding: 0 0 16px;
          }

          .btn-submit {
            width: 100%;
            height: 48px;
            margin: 16px 0 0;
            /* padding: 12px 136.5px; */
            border-radius: 8px;
            background-color: #d26132;
            color: #fff;
            border: solid 0px;

          }

          input[type="file"] {
            display: block;
          }

          .imageThumb {
            height: 102px;
            width: 102px;
            /* border: 2px solid;
            padding: 1px;
            cursor: pointer; */
          }

          .pip {
            display: inline-block;
            margin: 10px 10px 0 0;
            position: relative;
          }

          .remove {
            width: 15px;
            height: 16px;
            border-radius: 12px;
            /* padding: 4px 4px 4px 4px; */
            background-image: url(./images/icon/close.svg);
            background-repeat: no-repeat, repeat;
            /* border: 1px solid black; */
            color: white;
            text-align: center;
            cursor: pointer;
            position: absolute;
            top: 8px;
            right: 8px;
            background-color: #fff;
          }


          .remove:hover {
            background: white;
            color: black;
          }

          .container-image {
            position: relative;
          }

          .topright {
            position: absolute;
            top: 8px;
            right: 16px;
          }
        </style>

        <div id="tabAftersale" class="tabcontent">
          <section style=" padding: 16px 16px 0px 16px">
            <div class="AFTERSALE-SERVICE">AFTERSALE SERVICE</div>
            <textarea name="" id="" cols="30" rows="10" class="textarea" placeholder="DETAILS"></textarea>
          </section>

          <section style=" padding: 0px 16px 16px 16px">
            <div class="photo-frame">
              <div class="photo-label">PHOTOS</div>

              <!-- <input type="button" value="Upload" class="btn-upload" onclick="document.getElementById('files').click();" /> -->


            </div>
            <div class="frame-insert-image">
              <input type="file" id="files" name="files[]" multiple />
              <button class="btn-submit">SUBMIT</button>
            </div>

          </section>
        </div>

        <div id="tabRental" class="tabcontent">
          Rental Resale
        </div>

        <style>
          .guidebook {
            width: 100%;
            padding: 16px 16px 0px 16px;
            font-family: Bd;
            font-size: 30px;
            font-weight: normal;
            font-stretch: normal;
            font-style: normal;
            line-height: 1;
            letter-spacing: normal;
            text-align: left;
            color: #4d4d4d;
          }

          .guidebook-container {
            /* width: 100%; */
            /* height: 148px; */
            margin: 8px 16px 16px 16px;
            border-radius: 12px;
            box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.04);
            background-color: #fff;
            border: solid 1px #f2f2f2;
          }

          .image-container {
            width: 96px;
            height: 124px;
            margin: 12px 16px 12px 12px;
            /* padding: 40px 5px 41px; */
            /* margin: 0 16px 0 0; */
            border-radius: 8px;
            background-color: #000000;
          }

          .resident-guidebook {
            width: 100%;
            height: 20px;
            margin-top: 12px;
            font-size: 20px;
            font-weight: bold;
            font-stretch: normal;
            font-style: normal;
            line-height: 1;
            letter-spacing: normal;
            text-align: left;
            color: #808080;
          }

          .detail-book {
            width: 100%;
            height: 48px;
            margin: 5px 0 0;
            font-family: Bd;
            font-size: 24px;
            font-weight: bold;
            font-stretch: normal;
            font-style: normal;
            line-height: 1;
            letter-spacing: normal;
            text-align: left;
            color: #1a1a1a;
          }

          .dowload-btn {
            font-family: Med;
            font-size: 20px;
            width: 105px;
            height: 41px;
            margin: 8px 0px 24px 0;
            padding: 8px 12px;
            border-radius: 32px;
            color: #fff;
            background-color: #d26132;
            border: solid 1px
          }
        </style>

        <div id="tabResidentInfo" class="tabcontent">
          <div class="tab-content">

            <section>
              <div class="guidebook"> Guide Book</div>
              <div class="guidebook-container">
                <div style="display: flex;">
                  <div>
                    <img class="image-container" />
                  </div>
                  <div>
                    <div class="resident-guidebook">Resident Guide Book</div>
                    <div class="detail-book">NUE Noble Fai Chai - Wang Lang</div>
                    <button class="dowload-btn">Download</button>
                  </div>
                </div>
              </div>
            </section>

            <style>
              .phone_directory {
                width: 100%;
                height: 30px;
                margin: 0 0 4px;
                padding-left: 16px;
                padding-right: 16px;
                font-family: Bd;
                font-size: 30px;
                font-weight: bold;
                font-stretch: normal;
                font-style: normal;
                line-height: 1;
                letter-spacing: normal;
                text-align: left;
                color: #4d4d4d;
              }

              .list-phone_directory {
                width: 100%;
              }

              .list-phone_directory .list-item {
                margin-left: 16px;
                margin-right: 16px;
                padding-top: 8px;
                padding-bottom: 8px;
                display: flex;
                flex-direction: row;
                align-items: flex-start;
                /* width: 100%; */
                border-bottom: 1px solid #f2f2f2;
              }

              .list-phone_directory .list-item .info {
                flex-grow: 1;
              }

              .list-phone_directory .list-item .btn-call {
                width: 48px;
                min-width: 48px;
                max-width: 48px;
                height: 48px;
                background-color: #f7f2e8;
                border-radius: 50%;
                text-align: center;
              }

              .list-phone_directory .list-item .info .contact-name {
                width: 100%;
                height: 24px;
                font-family: Bd;
                font-size: 24px;
                font-weight: bold;
                font-stretch: normal;
                font-style: normal;
                line-height: 1;
                letter-spacing: normal;
                text-align: left;
                color: #1a1a1a;
              }

              .list-phone_directory .list-item .info .contact-tel {
                width: 100%;
                height: 24px;
                font-family: Reg;
                font-size: 24px;
                font-weight: normal;
                font-stretch: normal;
                font-style: normal;
                line-height: 1;
                letter-spacing: normal;
                text-align: left;
                color: #4d4d4d;
              }
            </style>

            <section>
              <div class="phone_directory">PHONE DIRECTORY</div>
              <!-- List -->
              <div class="list-phone_directory">

                <!-- List Item -->
                <div class="list-item">

                  <!-- Info -->
                  <div class="info">
                    <h3 class="contact-name">Juristic Office</h3>
                    <p class="contact-tel">(+66 2) 251-9955</p>
                  </div>
                  <!-- Call -->
                  <a class="btn-call"></a>
                </div>

              </div>
            </section>

          </div>
        </div>



      </div>
    </div>
    <div>
      <div class="box-bottom-action notification">
        <button class="btn btn-noti" type="button">Service Status <span class="number">3</span></button>
      </div>
    </div>
  </div>
</body>

</html>

<script>
  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    if (window.File && window.FileList && window.FileReader) {
      $("#files").on("change", function(e) {
        var files = e.target.files,
          filesLength = files.length;
        for (var i = 0; i < filesLength; i++) {
          var f = files[i]
          var fileReader = new FileReader();
          fileReader.onload = (function(e) {
            var file = e.target;
            $("<div class=\"pip\">" +
              "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
              "<br/><div class=\"remove\"></div>" +
              "</div>").insertAfter("#files");
            $(".remove").click(function() {
              $(this).parent(".pip").remove();
            });

          });
          fileReader.readAsDataURL(f);
        }
      });
    } else {
      alert("Your browser doesn't support to File API")
    }
  });
</script>