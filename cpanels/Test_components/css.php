<style>
   

/* Please ❤ this if you like it! */


@import url('https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900');

body{
	font-family: 'Montserrat', sans-serif;
	font-weight: 300;
	font-size: 15px;
	line-height: 1.7;
	color: #c4c3ca;
	background-color: #1f2029;
  background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat-back.svg');
  background-position: center;
  background-repeat: repeat;
  background-size: 4%;
	overflow-x: hidden;
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear;
}
a {
	cursor: pointer;
}
a:hover {
	text-decoration: none;
}

/* #Cursor
================================================== */

.cursor,
.cursor2,
.cursor3{
	position: fixed;
	border-radius: 50%;	
	transform: translateX(-50%) translateY(-50%);
	pointer-events: none;
	left: -100px;
	top: 50%;
	mix-blend-mode: difference;
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear;
}
.cursor{
	background-color: #fff;
	height: 0;
	width: 0;
	z-index: 99999;
}
.cursor2,.cursor3{
	height: 36px;
	width: 36px;
	z-index:99998;
	-webkit-transition:all 0.3s ease-out;
	transition:all 0.3s ease-out
}
.cursor2.hover,
.cursor3.hover{
	-webkit-transform:scale(2) translateX(-25%) translateY(-25%);
	transform:scale(2) translateX(-25%) translateY(-25%);
	border:none
}
.cursor2{
	border: 2px solid #fff;
	box-shadow: 0 0 22px rgba(255, 255, 255, 0.6);
}
.cursor2.hover{
	background: rgba(255,255,255,1);
	box-shadow: 0 0 12px rgba(255, 255, 255, 0.2);
}

@media screen and (max-width: 1200px){
	.cursor,.cursor2,.cursor3{
		display: none
	}
}

/* #Primary style
================================================== */

.section {
    position: relative;
	width: 100%;
	display: block;
}
.over-hide{
	overflow: hidden;
}
.full-height {
	height: 100vh;
}

/* #Navigation
================================================== */
 
.cd-header{
    position: fixed;
	width:100%;
	top:0;
	left:0;
	z-index:100;
} 
.header-wrapper{
    position: relative;
	width: calc(100% - 100px);
	margin-left: 50px;
} 
.logo-wrap {
	position: absolute;
	display:block;
	right:0;
	top: 40px;
	cursor: pointer;
}
.logo-wrap a {
	cursor: pointer;
	font-family: 'Montserrat', sans-serif;
	font-weight: 900;
	font-size: 20px;
	line-height: 20px;
	text-transform: uppercase;
	letter-spacing: 2px;
	color: #fff;
	transition : all 0.3s ease-out;
}
.logo-wrap a span{ 
	color: #8167a9;
}
.logo-wrap a:hover {
	opacity: 0.9;
}
.nav-but-wrap{ 
	position: relative;
	display: inline-block;
	float: left;
	padding-left: 15px;
	padding-top: 15px;
	margin-top: 26px;
	transition : all 0.3s ease-out;
}
.menu-icon {
	height: 30px;
	width: 30px;
	position: relative;
	z-index: 2;
	cursor: pointer;
	display: block;
}
.menu-icon__line {
	height: 2px;
	width: 30px;
	display: block;
	background-color: #fff;
	margin-bottom: 7px;
	cursor: pointer;
	-webkit-transition: background-color .5s ease, -webkit-transform .2s ease;
	transition: background-color .5s ease, -webkit-transform .2s ease;
	transition: transform .2s ease, background-color .5s ease;
	transition: transform .2s ease, background-color .5s ease, -webkit-transform .2s ease;
}
.menu-icon__line-left {
	width: 16.5px;
	-webkit-transition: all 200ms linear;
	transition: all 200ms linear;
}
.menu-icon__line-right {
	width: 16.5px;
	float: right;
	-webkit-transition: all 200ms linear;
	-moz-transition: all 200ms linear;
	-o-transition: all 200ms linear;
	-ms-transition: all 200ms linear;
	transition: all 200ms linear;
}
.menu-icon:hover .menu-icon__line-left,
.menu-icon:hover .menu-icon__line-right {
	width: 30px;
}
.nav {
	position: fixed;
	z-index: 98;
}
.nav:before, .nav:after {
	content: "";
	position: fixed;
  top: 20px;
  left: 50px;
	width: 0;
	height: 0;
	background-color: rgba(20, 21, 26,0.6);
	border-bottom-right-radius: 200%;
	z-index: -1;
	transition: border-radius linear 0.8s, width cubic-bezier(0.77, 0, 0.175, 1) 0.6s, height cubic-bezier(0.77, 0, 0.175, 1) 0.6s;
}
.nav:after {
	background-color: rgba(9,9,12,1);
  background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat.svg');
  background-position: bottom center;
  background-repeat: no-repeat;
  background-size: 300%;
	-webkit-transition-delay: 0s;
          transition-delay: 0s;
  box-shadow: 6px 7px 28px 0 rgba(16, 16, 16, 0.3);
}
.nav:before {
	-webkit-transition-delay: .2s;
          transition-delay: .2s;
}
.nav__content {
	position: fixed;
	visibility: hidden;
	top: 90px;
  left: 50px;
	width: 280px;
	text-align: left;
}
.nav__list {
	position: relative;
	padding: 0;
	margin: 0;
	z-index: 2;
}
.nav__list-item {
	position: relative;
	display: block;
	-webkit-transition-delay: 0.8s;
          transition-delay: 0.8s;
	opacity: 0;
	text-align: left;
	color: #fff;
	overflow: hidden; 
	font-family: 'Poppins', sans-serif;
	font-size: 22px;
	line-height: 1.2;
	letter-spacing: 2px;
	-webkit-transform: translate(30px, 0%);
          transform: translate(30px, 0%);
	-webkit-transition: opacity .2s ease, -webkit-transform .3s ease;
	transition: opacity .2s ease, -webkit-transform .2s ease;
	transition: opacity .2s ease, transform .2s ease;
	transition: opacity .2s ease, transform .2s ease, -webkit-transform .2s ease;
  margin-top: 7px;
  margin-bottom: 7px;
}
.nav__list-item a{ 
	position: relative;
	text-decoration: none;
	color: rgba(255,255,255,0.6);
	overflow: hidden; 
	cursor: pointer;
	font-family: 'Poppins', sans-serif;
	font-weight: 600;
	z-index: 2;
  padding-left: 40px;
  padding-top:5px;
  padding-bottom: 5px;
	display: inline-block;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear; 
}
.nav__list-item a:after{ 
	position: absolute;
	content: '';
	top: 50%;
	left: 0;
	width: 5px;
	height: 0;
	opacity: 0;
	background-color: #8167a9;
	z-index: 1;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear; 
}
.nav__list-item a:hover:after{ 
	height: 100%;
	opacity: 1;
	top: 0;
}
.nav__list-item a:hover{
	color: rgba(255,255,255,1);
}
.nav__list-item.active-nav a{
	color: rgba(255,255,255,1);
}
.nav__list-item.active-nav a:after{ 
	height: 100%;
	opacity: 1;
	top: 0;
}
body.nav-active .nav__content {
	visibility: visible;
}
body.nav-active .menu-icon__line {
	background-color: #fff;
	-webkit-transform: translate(0px, 0px) rotate(-45deg);
          transform: translate(0px, 0px) rotate(-45deg);
}
body.nav-active .menu-icon__line-left {
	width: 15px;
	-webkit-transform: translate(2px, 4px) rotate(45deg);
          transform: translate(2px, 4px) rotate(45deg);
}
body.nav-active .menu-icon__line-right {
	width: 15px;
	float: right;
	-webkit-transform: translate(-3px, -3.5px) rotate(45deg);
          transform: translate(-3px, -3.5px) rotate(45deg);
}
body.nav-active .menu-icon:hover .menu-icon__line-left,
body.nav-active .menu-icon:hover .menu-icon__line-right {
	width: 15px;
}
body.nav-active .nav {
	visibility: visible;
}
body.nav-active .nav:before, body.nav-active .nav:after {
	width: 250px;
	height: 350px;
	border-radius: 15px;
}
body.nav-active .nav:after {
	-webkit-transition-delay: .1s;
          transition-delay: .1s;
}
body.nav-active .nav:before {
	-webkit-transition-delay: 0s;
          transition-delay: 0s;
}
body.nav-active .nav__list-item {
	opacity: 1;
	-webkit-transform: translateX(0%);
          transform: translateX(0%);
	-webkit-transition: opacity .3s ease, color .3s ease, -webkit-transform .3s ease;
	transition: opacity .3s ease, color .3s ease, -webkit-transform .3s ease;
	transition: opacity .3s ease, transform .3s ease, color .3s ease;
	transition: opacity .3s ease, transform .3s ease, color .3s ease, -webkit-transform .3s ease;
}
body.nav-active .nav__list-item:nth-child(0) {
	-webkit-transition-delay: 0.7s;
          transition-delay: 0.7s;
}
body.nav-active .nav__list-item:nth-child(1) {
	-webkit-transition-delay: 0.8s;
          transition-delay: 0.8s;
}
body.nav-active .nav__list-item:nth-child(2) {
	-webkit-transition-delay: 0.9s;
          transition-delay: 0.9s;
}
body.nav-active .nav__list-item:nth-child(3) {
	-webkit-transition-delay: 1s;
          transition-delay: 1s;
}
body.nav-active .nav__list-item:nth-child(4) {
	-webkit-transition-delay: 1.1s;
          transition-delay: 1.1s;
}
body.nav-active .nav__list-item:nth-child(5) {
	-webkit-transition-delay: 1.2s;
          transition-delay: 1.2s;
}
body.nav-active .nav__list-item:nth-child(6) {
	-webkit-transition-delay: 1.3s;
          transition-delay: 1.3s;
}
body.nav-active .nav__list-item:nth-child(7) {
	-webkit-transition-delay: 1.4s;
          transition-delay: 1.4s;
}
body.nav-active .nav__list-item:nth-child(8) {
	-webkit-transition-delay: 1.5s;
          transition-delay: 1.5s;
}
body.nav-active .nav__list-item:nth-child(9) {
	-webkit-transition-delay: 1.6s;
          transition-delay: 1.6s;
}
body.nav-active .nav__list-item:nth-child(10) {
	-webkit-transition-delay: 1.7s;
          transition-delay: 1.7s;
}

.switch-wrap {
	position: absolute;
	top: 50%;
	left: 0;
	z-index: 10;
    transform: translateY(-50%);
	width: 100%;
	-webkit-transition: all 500ms linear;
	transition: all 500ms linear; 
	margin: 0 auto;
	text-align: center;
}
.switch-wrap h1 {
	font-weight: 900;
	font-size: 46px;
	line-height: 1;
	color: #fff;
	text-align: center;
	text-transform: uppercase;
	margin-bottom: 40px;
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
}
@media screen and (max-width: 580px){
  .switch-wrap h1 {
    font-size: 32px;
  }
}
.switch-wrap p {
	font-weight: 600;
	font-size: 14px;
	letter-spacing: 1px;
	line-height: 1;
	color: #8167a9;
	text-align: center;
	margin-top: 15px;
}
.switch-wrap p span {
	position: relative;
}
.switch-wrap p span:before {
	position: absolute;
	content: '';
	width: 100%;
	height: 2px;
	background-color: #fff;
	left: 0;
	bottom: -4px;
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
}
.switch-wrap p span:nth-child(2):before {
	opacity: 0;
}
#switch,
#circle {
	cursor: pointer;
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
} 
#switch {
	width: 60px;
	height: 8px;
	margin: 0 auto;
	text-align: center;
	border: 2px solid #000;
	border-radius: 27px;
	background: #8167a9;
	position: relative;
	display: inline-block;
}
#circle {
	position: absolute;
	top: -11px;
	left: -13px;
	width: 26px;
	height: 26px;
	border-radius: 50%;
	box-shadow: 0 4px 4px rgba(26,53,71,0.25), 0 0 0 1px rgba(26,53,71,0.07);
	background: #fff;
}
.switched {
	border-color: #8167a9 !important;
	background: #000 !important;
}
.switched #circle {
	left: 43px;
	background: #000;
}

/* #Light
================================================== */

body.light{
	background-color: #fff;
}
body.light .cursor,
body.light .cursor2,
body.light .cursor3{
	mix-blend-mode: normal;
}
body.light .cursor2{
	border: 2px solid #1f2029;
	box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);
}
body.light .cursor2.hover{
	background: rgba(0,0,0,0.06);
	box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);
	border-color: transparent;
}
body.light .logo-wrap a {
	color: #1f2029;
}
body.light .menu-icon__line {
	background-color: #1f2029;
}
body.light .nav:before {
	background-color: rgba(235, 235, 235,0.4);
}
body.light .nav:after {
	background-color: rgb(246,239,249);
  box-shadow: 6px 6px 22px rgba(42, 31, 63, 0.1);
}
body.light .nav__list-item a{ 
	color: rgba(0,0,0,0.6); 
}
body.light .nav__list-item a:hover{
	color: #1f2029;
}
body.light .nav__list-item.active-nav a{
	color: #1f2029;
}
body.light .switch-wrap h1 {
	color: #000;
}
body.light .switch-wrap p span:nth-child(2):before {
	opacity: 1;
	background-color: #000;
}
body.light .switch-wrap p span:nth-child(1):before {
	opacity: 0;
}

/* #Link to page
================================================== */

.link-to-portfolio {
	  position: fixed;
    bottom: 40px;
    right: 50px;
    z-index: 200;
    cursor: pointer;
    width: 40px;
    height: 40px;
    text-align: center;
    border-radius: 3px;
    background-position: center center;
    background-size: cover;
    background-image: url('https://ivang-design.com/ig-logo.jpg');
    box-shadow: 0 0 0 2px rgba(255,255,255,.1);
    transition: opacity .2s, border-radius .2s, box-shadow .2s;
    transition-timing-function: ease-out;
}
.link-to-portfolio:hover {
    opacity: 0.8;
    border-radius: 50%;
    box-shadow: 0 0 0 20px rgba(255,255,255,.1);
} 
    
</style>