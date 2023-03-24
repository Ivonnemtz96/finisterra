<style>
#nta-wa-gdpr {
    vertical-align: text-top !important;
    padding: 0 !important;
    margin: 0 !important;
}

.nta-wa-gdpr {
    font-size: 11px;
    padding: 5px;
    margin-left: -5px;
    margin-right: -5px;
    border-radius: 4px;
}

.nta-wa-gdpr a {
    text-decoration: underline;
    color: inherit;
}

.pointer-disable {
    pointer-events: none;
}

.nta-woo-products-button:before,
.nta-woo-products-button:after {
    content: '';
    display: block;
    clear: both;
}

.wa__button {
    border-bottom: none !important;
}

.wa__btn_w_img:hover {
    text-decoration: none;
}

.wa__button,
.wa__btn_popup,
.wa__button *,
.wa__btn_popup *,
.wa__btn_popup :before,
.wa__button :before,
.wa__button :after,
.wa__btn_popup :after,
.wa__popup_chat_box,
.wa__popup_chat_box *,
.wa__popup_chat_box :before,
.wa__popup_chat_box :after {
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}

/* VVV--button--VVV */
.wa__button {
    position: relative;
    width: 300px;
    min-height: 64px;
    display: block;
    font-family: Arial, Helvetica, sans-serif;
    text-decoration: none;
    color: #fff;
    box-shadow: 0px 4px 8px 1px rgba(32, 32, 37, 0.09);
    -webkit-box-shadow: 0px 4px 8px 1px rgba(32, 32, 37, 0.09);
    -moz-box-shadow: 0px 4px 8px 1px rgba(32, 32, 37, 0.09);
}

.wa__btn_txt {
    display: inline-block;
    font-size: 12px;
    line-height: 1.33em;
}

.wa__btn_w_icon .wa__btn_txt {
    padding: 16px 20px 15px 71px;
}

.wa__button_text_only .wa__btn_txt,
.wa__r_button.wa__btn_w_img.wa__button_text_only .wa__btn_txt,
.wa__sq_button.wa__btn_w_img.wa__button_text_only .wa__btn_txt {
    padding-top: 25px;
    padding-bottom: 24px;
}



.wa__btn_w_icon .wa__btn_txt .wa__btn_title {
    font-weight: 600;
    padding-left: 2px;
    font-size: 14px;
}

.wa__cs_info {
    margin-bottom: 2px
}

.wa__btn_status {
    color: #F5A623;
    font-size: 9px;
    padding: 2px 0 0;
    font-weight: 700;
}

.wa__cs_info .wa__cs_name,
.wa__cs_info .wa__cs_status {
    display: inline-block;
}

.wa__cs_info .wa__cs_name {
    font-weight: 400;
    font-size: 12px;
    line-height: 1.36em;
}

.wa__stt_online .wa__cs_info .wa__cs_name {
    color: #d5f0d9
}

.wa__stt_offline .wa__cs_info .wa__cs_name {
    color: #76787d;
}

.wa__cs_info .wa__cs_status {
    width: 36px;
    height: 14px;
    margin-left: 3px;
    padding: 1px;
    font-size: 9px;
    line-height: 1.34em;
    border-radius: 5px;
    color: rgba(255, 255, 255, 0.98);
    position: relative;
    top: -1px;
    left: 0px;
    text-align: center;
}

.wa__stt_online .wa__cs_info .wa__cs_status {
    background: #62c971;
}

.wa__stt_offline .wa__cs_info .wa__cs_status {
    background: #b9bbbe;
}


.wa__stt_online {
    background: #2DB742;
    cursor: pointer;
    transition: 0.4s ease all;
    -webkit-transition: 0.4s ease all;
    -moz-transition: 0.4s ease all;
    backface-visibility: hidden;
    will-change: transform;
}

.wa__stt_online .wa__btn_txt {
    position: relative;
    z-index: 4;
}

.wa__r_button.wa__stt_online:before {
    border-radius: 50vh;
}

.wa__sq_button.wa__stt_online:before {
    border-radius: 5px;
}

.wa__stt_online:before {
    content: '';
    transition: 0.4s ease all;
    -webkit-transition: 0.4s ease all;
    -moz-transition: 0.4s ease all;
    background: rgba(0, 0, 0, 0.2);
    position: absolute;
    left: 0;
    top: 0;
    z-index: -1;
    width: 100%;
    height: 100%;
    opacity: 0;
    will-change: opacity;
}

.wa__button.wa__stt_online:focus,
.wa__button.wa__stt_online:active,
.wa__button.wa__stt_online:hover {
    box-shadow: 0px 4px 8px 1px rgba(32, 32, 37, 0.19);
    transform: translate(0, -3px);
    -webkit-transform: translate(0, -3px);
    -moz-transform: translate(0, -3px);
    -ms-transform: translate(0, -3px);
}

.wa__button.wa__stt_online:focus:before,
.wa__button.wa__stt_online:active:before,
.wa__button.wa__stt_online:hover:before {
    opacity: 1;
}

.wa__stt_online.wa__btn_w_icon .wa__btn_icon img {
    transform: scale(1);
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    transition: 0.2s ease all;
    -webkit-transition: 0.2s ease all;
    -moz-transition: 0.2s ease all;
}

.wa__stt_offline {
    background: #EBEDF0;
    color: #595B60;
    box-shadow: none;
    cursor: initial;
}

.wa__stt_offline.wa__btn_w_icon .wa__btn_txt {
    padding: 8px 20px 6px 71px;
}

.wa__stt_offline.wa__r_button.wa__btn_w_img .wa__btn_txt {
    padding: 8px 20px 8px 100px
}

.wa__stt_offline.wa__sq_button.wa__btn_w_img .wa__btn_txt {
    padding: 8px 20px 8px 70px;
}

.wa__btn_w_icon .wa__btn_icon {
    position: absolute;
    top: 50%;
    left: 16px;
    transform: translate(0, -50%);
    -moz-transform: translate(0, -50%);
    -webkit-transform: translate(0, -50%);
}

.wa__btn_w_icon .wa__btn_icon img {
    width: 41px;
    height: 69px;
}

.wa__btn_w_img {
    position: relative;
    width: 300px;
    margin: 20px 0 20px;
}

.wa__btn_w_img .wa__cs_img {
    position: absolute;
    top: 50%;
    left: 0px;
    text-align: center;
    transform: translate(0, -50%);
    -webkit-transform: translate(0, -50%);
    -moz-transform: translate(0, -50%);
}

.wa__btn_w_img .wa__cs_img_wrap {
    width: 79px;
    height: 79px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border: 3px solid #ffffff;
    position: relative;
    overflow: hidden;
}

.wa__btn_w_img .wa__cs_img img {
    max-width: 100%;
    height: auto;
    transition: 0.2s ease transform;
    -webkit-transition: 0.2s ease transform;
    -moz-transition: 0.2s ease transform;
}

.wa__btn_w_img .wa__cs_img:after {
    content: '';
    background: #ffffff url('../img/whatsapp_logo_green.svg') center center no-repeat;
    background-size: 21px;
    display: block;
    width: 27px;
    height: 27px;
    position: absolute;
    top: 20px;
    right: -14px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    box-shadow: 0px 4px 6px 0px rgba(39, 38, 38, 0.3);
    -webkit-box-shadow: 0px 4px 6px 0px rgba(39, 38, 38, 0.3);
    -moz-box-shadow: 0px 4px 6px 0px rgba(39, 38, 38, 0.3);
}

.wa__stt_offline.wa__btn_w_img .wa__cs_img:after {
    content: '';
    background: #ffffff url('../img/whatsapp_logo_gray.svg') center center no-repeat;
    background-size: 21px;
    display: block;
    width: 27px;
    height: 27px;
    position: absolute;
    top: 20px;
    right: -14px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    box-shadow: 0px 4px 6px 0px rgba(39, 38, 38, 0.3);
    -webkit-box-shadow: 0px 4px 6px 0px rgba(39, 38, 38, 0.3);
    -moz-box-shadow: 0px 4px 6px 0px rgba(39, 38, 38, 0.3);
}


.wa__btn_w_img .wa__btn_txt {
    padding: 14px 20px 12px 103px;
}

.wa__r_button {
    border-radius: 50vh;
}

.wa__sq_button {
    border-radius: 5px;
}

.wa__sq_button.wa__btn_w_img {
    width: 270px;
    margin-left: 30px;
}

.wa__r_button.wa__btn_w_img .wa__cs_img {
    left: -5px;
}

.wa__sq_button.wa__btn_w_img .wa__cs_img {
    left: -35px;
}

.wa__sq_button.wa__btn_w_img .wa__btn_txt {
    padding: 10px 20px 10px 70px;
    display: table-cell;
    vertical-align: middle;
    height: 66px;
}

.wa__btn_txt .wa__btn_title {
    font-weight: 600;
}

.wa__r_button.wa__btn_w_img .wa__btn_txt {
    padding: 8px 20px 8px 100px;
    display: table-cell;
    vertical-align: middle;
    height: 66px;
}

.wa__r_button.wa__btn_w_img .wa__cs_info .wa__cs_status {
    margin-left: 3px;
}

/* ^^^--button--^^^ */

/* VVV--popup--VVV */

.wa__popup_chat_box {
    font-family: Arial, Helvetica, sans-serif;
    width: 351px;
    border-radius: 5px 5px 8px 8px;
    -webkit-border-radius: 5px 5px 8px 8px;
    -moz-border-radius: 5px 5px 8px 8px;
    position: fixed;
    overflow: hidden;
    box-shadow: 0px 10px 10px 4px rgba(0, 0, 0, 0.04);
    -webkit-box-shadow: 0px 10px 10px 4px rgba(0, 0, 0, 0.04);
    -moz-box-shadow: 0px 10px 10px 4px rgba(0, 0, 0, 0.04);
    bottom: 102px;
    right: 25px;
    z-index: 998;
    opacity: 0;
    visibility: hidden;
    -ms-transform: translate(0, 50px);
    transform: translate(0, 50px);
    -webkit-transform: translate(0, 50px);
    -moz-transform: translate(0, 50px);
    transition: 0.4s ease all;
    -webkit-transition: 0.4s ease all;
    -moz-transition: 0.4s ease all;
    will-change: transform, visibility, opacity;
    max-width: calc(100% - 50px);
}

.wa__popup_chat_box:hover,
.wa__popup_chat_box:focus,
.wa__popup_chat_box:active {
    box-shadow: 0px 10px 10px 4px rgba(32, 32, 37, 0.23);
    -webkit-box-shadow: 0px 10px 10px 4px rgba(32, 32, 37, 0.23);
    -moz-box-shadow: 0px 10px 10px 4px rgba(32, 32, 37, 0.23);
}

.wa__popup_chat_box.wa__active {
    -ms-transform: translate(0, 0);
    transform: translate(0, 0);
    -webkit-transform: translate(0, 0);
    -moz-transform: translate(0, 0);
    visibility: visible;
    opacity: 1;
}

.wa__popup_chat_box .wa__popup_heading {
    position: relative;
    padding: 10px;
    color: #d9ebc6;
    background: #2db742;
}

.wa__popup_chat_box .wa__popup_heading_sm {
    padding: 12px 15px 17px 74px;
}

.wa__popup_chat_box .wa__popup_heading:before {
    content: '';
    background: url('../img/whatsapp_logo.svg') center top no-repeat;
    background-size: 33px;
    display: block;
    width: 55px;
    height: 33px;
    position: absolute;
    top: 20px;
    left: 12px;
}

.wa__popup_chat_box .wa__popup_heading_sm:before {
    top: 19px;
    left: 11px;
}

.wa__popup_chat_box .wa__popup_heading .wa__popup_title {
    padding-top: 2px;
    padding-bottom: 3;
    color: #ffffff;
    font-size: 18px;
    line-height: 24px;
}

.wa__popup_chat_box .wa__popup_heading .wa__popup_intro {
    padding-top: 4px;
    font-size: 12px;
    line-height: 20px;
}

.wa__popup_chat_box .wa__popup_heading_sm .wa__popup_intro {
    padding-top: 0px;
}

.wa__popup_chat_box .wa__popup_heading .wa__popup_intro a {
    display: inline-block;
    color: #ffffff;
    text-decoration: none;
}

.wa__popup_chat_box .wa__popup_heading .wa__popup_intro a:hover,
.wa__popup_chat_box .wa__popup_heading .wa__popup_intro a:focus,
.wa__popup_chat_box .wa__popup_heading .wa__popup_intro a:active {
    text-decoration: underline;
}

.wa__popup_chat_box .wa__popup_notice {
    font-size: 11px;
    color: #a5abb7;
    font-weight: 500;
    padding: 0 3px;
}

.wa__popup_chat_box .wa__popup_content {
    background: #ffffff;
    padding: 13px 20px 21px 19px;
    text-align: center;
}

.wa__popup_chat_box .wa__popup_content_left {
    text-align: left;
}

.wa__popup_chat_box .wa__popup_avatar {
    position: absolute;
    overflow: hidden;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    left: 12px;
    top: 12px;
}

.wa__popup_chat_box .wa__popup_avatar.nta-default-avt {
    border-radius: unset;
    -webkit-border-radius: unset;
    -moz-border-radius: unset;
}

.wa__popup_chat_box .wa__stt {
    padding: 13px 40px 12px 74px;
    position: relative;
    text-decoration: none;
    display: table;
    width: 100%;
    border-left: 2px solid #2db742;
    background: #f5f7f9;
    border-radius: 2px 4px 2px 4px;
    -webkit-border-radius: 2px 4px 2px 4px;
    -moz-border-radius: 2px 4px 2px 4px;
}

.wa__popup_chat_box .wa__stt:after {
    content: '';
    background: url('../img/whatsapp_logo_green.svg') 0 0 no-repeat;
    position: absolute;
    right: 14px;
    top: 26px;
    width: 20px;
    height: 20px;
    background-size: 100% 100%;
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
}

.wa__popup_chat_box .wa__stt.wa__stt_offline:after {
    background-image: url('../img/whatsapp_logo_gray_sm.svg');
}

.wa__popup_chat_box .wa__stt.wa__stt_online {
    transition: 0.2s ease all;
    -webkit-transition: 0.2s ease all;
    -moz-transition: 0.2s ease all;
}

.wa__popup_chat_box .wa__stt.wa__stt_online:hover,
.wa__popup_chat_box .wa__stt.wa__stt_online:active,
.wa__popup_chat_box .wa__stt.wa__stt_online:focus {
    background: #ffffff;
    box-shadow: 0px 7px 15px 1px rgba(55, 62, 70, 0.07);
    -webkit-box-shadow: 0px 7px 15px 1px rgba(55, 62, 70, 0.07);
    -moz-box-shadow: 0px 7px 15px 1px rgba(55, 62, 70, 0.07);
}

.wa__popup_content_list .wa__popup_content_item {
    margin: 14px 0 0;
    transform: translate(0, 20px);
    -webkit-transform: translate(0, 20px);
    -moz-transform: translate(0, 20px);
    will-change: opacity, transform;
    opacity: 0;
}

.wa__popup_chat_box.wa__pending .wa__popup_content_list .wa__popup_content_item {
    transition: 0.4s ease all;
    -webkit-transition: 0.4s ease all;
    -moz-transition: 0.4s ease all;
    transition-delay: 2.1s;
    -webkit-transition-delay: 2.1s;
    -moz-transition-delay: 2.1s;
}

.wa__popup_chat_box.wa__pending .wa__popup_content_list .wa__popup_content_item:nth-child(1) {
    transition-delay: 0.3s;
    -webkit-transition-delay: 0.3s;
    -moz-transition-delay: 0.3s;
}

.wa__popup_chat_box.wa__pending .wa__popup_content_list .wa__popup_content_item:nth-child(2) {
    transition-delay: 0.5s;
    -webkit-transition-delay: 0.5s;
    -moz-transition-delay: 0.5s;
}

.wa__popup_chat_box.wa__pending .wa__popup_content_list .wa__popup_content_item:nth-child(3) {
    transition-delay: 0.7s;
    -webkit-transition-delay: 0.7s;
    -moz-transition-delay: 0.7s;
}

.wa__popup_chat_box.wa__pending .wa__popup_content_list .wa__popup_content_item:nth-child(4) {
    transition-delay: 0.9s;
    -webkit-transition-delay: 0.9s;
    -moz-transition-delay: 0.9s;
}

.wa__popup_chat_box.wa__pending .wa__popup_content_list .wa__popup_content_item:nth-child(5) {
    transition-delay: 1.1s;
    -webkit-transition-delay: 1.1s;
    -moz-transition-delay: 1.1s;
}

.wa__popup_chat_box.wa__pending .wa__popup_content_list .wa__popup_content_item:nth-child(6) {
    transition-delay: 1.3s;
    -webkit-transition-delay: 1.3s;
    -moz-transition-delay: 1.3s;
}

.wa__popup_chat_box.wa__pending .wa__popup_content_list .wa__popup_content_item:nth-child(7) {
    transition-delay: 1.5s;
    -webkit-transition-delay: 1.5s;
    -moz-transition-delay: 1.5s;
}

.wa__popup_chat_box.wa__pending .wa__popup_content_list .wa__popup_content_item:nth-child(8) {
    transition-delay: 1.7s;
    -webkit-transition-delay: 1.7s;
    -moz-transition-delay: 1.7s;
}

.wa__popup_chat_box.wa__pending .wa__popup_content_list .wa__popup_content_item:nth-child(9) {
    transition-delay: 1.9s;
    -webkit-transition-delay: 1.9s;
    -moz-transition-delay: 1.9s;
}

.wa__popup_chat_box.wa__lauch .wa__popup_content_list .wa__popup_content_item {
    opacity: 1;
    transform: translate(0, 0);
    -webkit-transform: translate(0, 0);
    -moz-transform: translate(0, 0);
}

.wa__popup_content_list .wa__popup_content_item .wa__member_name {
    font-size: 14px;
    color: #363c47;
    line-height: 1.188em !important;
}

.wa__popup_content_list .wa__popup_content_item .wa__member_duty {
    font-size: 11px;
    color: #989b9f;
    padding: 2px 0 0;
    line-height: 1.125em !important;
}

.wa__popup_content_list .wa__popup_content_item .wa__member_status {
    color: #F5A623;
    font-size: 10px;
    padding: 5px 0 0;
    line-height: 1.125em !important;
}

.wa__popup_content_list .wa__popup_content_item .wa__popup_txt {
    display: table-cell;
    vertical-align: middle;
    min-height: 48px;
    height: 48px;
}

.wa__popup_content_list .wa__popup_content_item .wa__stt_offline {
    border-left-color: #c0c5ca;
}

.wa__popup_avt_list {
    font-size: 0;
    margin: 7px 0 24px;
}

.wa__popup_avt_list .wa__popup_avt_item {
    display: inline-block;
    position: relative;
    width: 46px;
}

.wa__popup_avt_list .wa__popup_avt_img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    position: relative;
    overflow: hidden;
    border: 2px solid #ffffff;
    left: -7px;
}

.wa__popup_call_btn {
    background: #2db742;
    color: #ffffff;
    text-decoration: none;
    display: inline-block;
    width: 275px;
    max-width: 100%;
    font-size: 16px;
    padding: 14px 10px;
    border-radius: 24px;
    -webkit-border-radius: 24px;
    -moz-border-radius: 24px;
    margin: 25px 0 15px;
    box-shadow: 0px 8px 17px 2px rgba(13, 15, 18, 0.2);
    -webkit-box-shadow: 0px 8px 17px 2px rgba(13, 15, 18, 0.2);
    -moz-box-shadow: 0px 8px 17px 2px rgba(13, 15, 18, 0.2);
}

.wa__popup_call_btn.wa__popup_call_btn_lg:before {
    content: '';
    display: inline-block;
    width: 20px;
    height: 20px;
    position: relative;
    background: url('../img/whatsapp_logo_green_sm.svg') 0 0 no-repeat;
    background-size: 100% 100%;
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    vertical-align: top;
    top: 0px;
    margin-right: -19px;
    left: -31px;
    transition: 0.2s ease background-image;
    -webkit-transition: 0.2s ease background-image;
    -moz-transition: 0.2s ease background-image;
}

.wa__popup_call_btn.wa__popup_call_btn_lg:hover:before,
.wa__popup_call_btn.wa__popup_call_btn_lg:focus:before,
.wa__popup_call_btn.wa__popup_call_btn_lg:active:before {
    background-image: url('../img/whatsapp_logo.svg')
}

.wa__popup_chat_box_gray {
    border-radius: 2px 2px 8px 8px;
}

.wa__popup_chat_box_gray .wa__popup_heading_gray {
    background: #f8f8f8;
    border-top: 3px solid #2db742;
    color: #868c9a;
    font-weight: 500;
}

.wa__popup_chat_box_gray .wa__popup_heading_gray .wa__popup_title {
    color: #595b60;
}

.wa__popup_chat_box_gray .wa__popup_heading_gray:before {
    content: '';
    background: url(../img/whatsapp_logo_green.svg) center top no-repeat;
    background-size: 33px;
    display: block;
    width: 55px;
    height: 33px;
    position: absolute;
    top: 20px;
    left: 12px;
}

.wa__popup_chat_box_gray .wa__popup_heading_gray .wa__popup_intro a {
    color: #595b60;
}

.wa__popup_chat_box_ct {
    width: 384px;
    text-align: center;
}

.wa__popup_chat_box_ct .wa__popup_heading_ct {
    text-align: center;
    padding: 18px 0 18px;
}

.wa__popup_chat_box_ct .wa__popup_heading_ct:before {
    content: '';
    background: url(../img/whatsapp_logo.svg) center top no-repeat;
    background-size: 30px;
    display: block;
    width: 30px;
    height: 31px;
    position: absolute;
    top: 15px;
    left: 72px;
}

.wa__popup_chat_box_ct .wa__popup_heading_ct .wa__popup_title {
    padding-left: 22px;
    padding-bottom: 14px;
}

.wa__popup_chat_box_ct .wa__popup_heading_ct .wa__popup_intro {
    margin-top: -5px;
    line-height: 12px;
}

.wa__popup_chat_box_ct .wa__popup_ct_avt_list:after {
    content: '';
    clear: both;
    display: block;
}

.wa__popup_chat_box_ct .wa__popup_ct_content {
    background: #ffffff;
    padding: 0 0 14px;
}

.wa__popup_chat_box_ct .wa__popup_ct_content .wa__popup_notice {
    padding-top: 18px;
    padding-bottom: 15px;
}

.wa__popup_chat_box_ct .wa__popup_ct_content_item {
    width: 33%;
    float: left;
    font-size: 10px;
}

.wa__popup_chat_box_ct .wa__popup_ct_content_item a {
    text-decoration: none;
    color: #989b9f;
}

.wa__popup_chat_box_ct .wa__popup_ct_content_item .wa__popup_ct_txt {
    padding-top: 8px;
}

.wa__popup_chat_box_ct .wa__popup_ct_content_item .wa__member_name {
    color: #363c47;
    font-size: 13px;
}

.wa__popup_chat_box_ct .wa__popup_ct_content_item .wa__member_duty {
    color: #989b9f;
    padding: 3px 0 0;
}

.wa__popup_chat_box_ct .wa__popup_ct_content_item .wa__member_stt_online {
    color: #2db742;
    font-size: 9px;
    line-height: 12px;
    display: inline-block;
    padding: 3px 0 0 16px;
    background: url('../img/whatsapp_logo_green.svg') 0 3px no-repeat;
    background-size: 12px auto;
    -webkit-background-size: 12px auto;
    -moz-background-size: 12px auto;
}

.wa__popup_chat_box_ct .wa__popup_ct_content_item .wa__member_stt_offline {
    color: #f5a623;
    font-size: 9px;
    line-height: 12px;
    padding: 2px 0 0;
}


.wa__popup_chat_box_ct .wa__popup_ct_avatar img {
    border-radius: 50%
}

.wa__popup_chat_box_ct .wa__popup_ct_call_btn {
    width: 97px;
    font-size: 11px;
    padding: 9px 10px 11px;
    margin: 15px 0 15px;
}

/* ^^^--popup--^^^ */

/* VVV--popup button--VVV */
.wa__btn_popup {
    position: fixed;
    right: 1rem;
    bottom: 5rem;
    cursor: pointer;
    font-family: Arial, Helvetica, sans-serif;
    z-index: 999;
}

.wa__btn_popup .wa__btn_popup_icon {
    width: 56px;
    height: 56px;
    background: #2db742;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    box-shadow: 0px 6px 8px 2px rgba(0, 0, 0, 0.14);
    -webkit-box-shadow: 0px 6px 8px 2px rgba(0, 0, 0, 0.14);
    -moz-box-shadow: 0px 6px 8px 2px rgba(0, 0, 0, 0.14);
}

.wa__btn_popup .wa__btn_popup_icon:before {
    content: '';
    position: absolute;
    z-index: 1;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    background: transparent url('/assets/images/whatsapp.png') center center no-repeat;
    background-size: 40px auto;
    -webkit-background-size: 40px auto;
    -moz-background-size: 40px auto;
    transition: 0.4s ease all;
    -webkit-transition: 0.4s ease all;
    -moz-transition: 0.4s ease all;
}

.wa__btn_popup .wa__btn_popup_icon:after {
    content: '';
    opacity: 0;
    position: absolute;
    z-index: 2;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    background: transparent url('/assets/images/close.png') center center no-repeat;
    background-size: 40px auto;
    -webkit-background-size: 40px auto;
    -moz-background-size: 40px auto;
    transition: 0.4s ease all;
    -webkit-transition: 0.4s ease all;
    -moz-transition: 0.4s ease all;
    -ms-transform: scale(0) rotate(-360deg);
    transform: scale(0) rotate(-360deg);
    -webkit-transform: scale(0) rotate(-360deg);
    -moz-transform: scale(0) rotate(-360deg);
}

.wa__btn_popup.wa__active .wa__btn_popup_icon:before {
    opacity: 0;
    -ms-transform: scale(0) rotate(360deg);
    transform: scale(0) rotate(360deg);
    -webkit-transform: scale(0) rotate(360deg);
    -moz-transform: scale(0) rotate(360deg);
}

.wa__btn_popup.wa__active .wa__btn_popup_icon:after {
    opacity: 1;
    -ms-transform: scale(1) rotate(0deg);
    transform: scale(1) rotate(0deg);
    -webkit-transform: scale(1) rotate(0deg);
    -moz-transform: scale(1) rotate(0deg);
}

.wa__btn_popup .wa__btn_popup_txt {
    position: absolute;
    width: 156px;
    right: 100%;
    background-color: #f5f7f9;
    font-size: 12px;
    color: #43474e;
    /*top: 15px;*/
    top: 7px;
    /* top: 50%;
        transform: translate(0,-50%);
        -moz-transform: translate(0,-50%);
        -webkit-transform: translate(0,-50%); */
    padding: 7px 0 7px 12px;
    margin-right: 7px;
    letter-spacing: -0.03em;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    transition: 0.4s ease all;
    -webkit-transition: 0.4s ease all;
    -moz-transition: 0.4s ease all;
}

.wa__btn_popup.wa__active .wa__btn_popup_txt {
    -ms-transform: translate(0, 15px);
    transform: translate(0, 15px);
    -webkit-transform: translate(0, 15px);
    -moz-transform: translate(0, 15px);
    opacity: 0;
    visibility: hidden;
    
}

/* ^^^--popup button--^^^ */
</style>

<div class="wa__btn_popup">
    <div class="wa__btn_popup_txt">¿Busca más información? <strong>Contáctenos</strong></div>
    <div class="wa__btn_popup_icon">
    </div>
</div>


<div class="wa__popup_chat_box">
    <div class="wa__popup_heading">
        <div class="wa__popup_title">¡Comience una conversación!</div>
        <div class="wa__popup_intro">Un asistente de ventas lo podrá ayudar en <strong>WhatsApp</strong>
            <div id="\&quot;eJOY__extension_root\&quot;"></div>
        </div>
    </div>
    <!-- /.wa__popup_heading -->
    <div class="wa__popup_content wa__popup_content_left">
        <div class="wa__popup_notice">Nuestro equipo responde en poco tiempo.</div>


        <div class="wa__popup_content_list">
            <div class="wa__popup_content_item ">
                <a target="_blank"
                    href="https://wa.me/+526241555762?text=Hola,%20me%20gustar%C3%ADa%20hacer%20contacto%20para%20un%20avalúo."
                    class="wa__stt wa__stt_online">
                    <div class="wa__popup_avatar">
                        <div class="wa__cs_img_wrap">
                            <img style="width: 3rem;" src="/assets/images/chat.jpg" alt="">
                        </div>
                    </div>

                    <div class="wa__popup_txt">
                        <div class="wa__member_name">Avalúos Finisterra</div>
                        <!-- /.wa__member_name -->
                        <div class="wa__member_duty">Ventas</div>
                        <!-- /.wa__member_duty -->
                    </div>
                    <!-- /.wa__popup_txt -->
                </a>
            </div>

        </div>
        <!-- /.wa__popup_content_list -->
    </div>
    <!-- /.wa__popup_content -->
</div>