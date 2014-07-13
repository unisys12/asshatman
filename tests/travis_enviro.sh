#!/usr/bin/env bash

[-d public/css ] || mkdir public/css
[-d build/css ] || mkdir build/css

pushd built/css
echo BODY, TH, TD, P, DIV, SPAN, INPUT, SELECT, TEXTAREA, FORM, B, STRONG, I, U, H1, H2, H3, H4, H5, H6, 
 DL, DD, DT, UL, LI, OL, OPTION, OPTGROUP, A {font-family:sans-serif;font-size:12px}
H1 {font-family:sans-serif;font-weight:bold;font-size:18px}
H2 {font-family:sans-serif;font-weight:bold;font-size:15px}
H3, H4 {font-family:sans-serif;font-weight:bold;font-size:12px}
H5, H6 {font-family:sans-serif;font-weight:bold;font-size:11px}
.DefBdy {color:#333;background-color:#FFF;margin:0px}
a:link {color:#003399;text-decoration:none}
a:visited {color:#003399;text-decoration:none}
a:hover {color:#003399;text-decoration:underline}
.ConMgn {margin:0px 10px}


/* ADD-REMOVE-IDIOM */
.AddRmvLbl {color:#5F6466;font-weight:bold;padding-bottom:3px}
.AddRmvLbl2 {color:#333;padding-bottom:3px}
table.AddRmvBtnTbl .Btn1 {width:100%}
table.AddRmvBtnTbl .Btn1Hov {width:100%}
table.AddRmvBtnTbl .Btn1Dis {width:100%}
table.AddRmvBtnTbl .Btn2 {width:100%}
table.AddRmvBtnTbl .Btn2Hov {width:100%}
table.AddRmvBtnTbl .Btn2Dis {width:100%}
.AddRmvVrtFst {margin:5px 0px 10px 0px;min-width:90px}
.AddRmvVrtWin {margin:5px 0px 10px 5px;min-width:90px}
.AddRmvVrtBwn {margin:5px 0px 10px 10px;min-width:90px}
.AddRmvHrzWin {margin-top:3px;min-width:100px}
.AddRmvHrzBwn {margin-top:8px;min-width:100px} > test1.css

echo .get-started {
  background-color: #e74c3c;
}
.gulpLogo {
  width: 114px !important;
  height: 257px !important;
}
.gulpBrand {
  /*color: #666;*/
}
.inline-block {
  display: inline-block;
  zoom: 1;
  *display: inline;
}
.clearfix {
  *zoom: 1;
}
.clearfix:before,
.clearfix:after {
  display: table;
  content: "";
}
.clearfix:after {
  clear: both;
} > test2.css
popd 

exit