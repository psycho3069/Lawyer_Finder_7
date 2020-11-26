.bg-white {
    background-color: #a5eeff !important;
}
body {
    background-color: white;

    {{-- font-family: Arial;
    margin: 0 auto; /* Center website */
    max-width: 800px; /* Max width */
    padding: 20px; --}}
}
.user-info{
}
.row{
    padding: 0;
    margin: 0;
}
.col-md-3{
    max-width: 100%;
    min-width: 25%;
}
.vertical-menu {
    width: 200px;
}

.vertical-menu a {
    background-color: #eee;
    color: white;
    display: block;
    padding: 12px;
    text-decoration: none;
}

.vertical-menu a:hover {
    background-color: #ccc;
}

.vertical-menu a.active {
    background-color: #4CAF50;
    color: white;
}
* {
  box-sizing: border-box;
}

.heading {
  font-size: 25px;
  margin-right: 25px;
}

.fa {
  font-size: 25px;
}

.checked {
  color: orange;
}

/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top:10px;
}

.middle {
  margin-top:10px;
  float: left;
  width: 70%;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.bar-5 {width: 60%; height: 18px; background-color: #4CAF50;}
.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
    .side, .middle {
        width: 100%;
    }
    .right {
        display: none;
    }
}
.container-x{
    max-width: 1400px
}
.pt-4, .py-4 {
    padding-top: 0 !important;
}
.grid-box{
    border: 1px solid lightcyan;
    padding: 1px;
    height: 48px;
    max-width: 200px;
    margin: 5px 45px;
    padding-left: 3px;
}

.button {

    display: inline-block;
    border-radius: 1px;
    background-color: #25b9ff;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 16px;
    padding: 5px;
    width: 100%;
    transition: all 0.5s;
    cursor: pointer;
    margin: 10px 0px 10px 1px;
    min-height: 50px;
    max-height: 100px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
    content: '\002b';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

{{-- .w3-red {
    border: 4px solid floralwhite !important;
    border-style: double !important;
    border-radius: 2px !important;
} --}}

.menu-button {
    color: white;
    background-color: #343a40!important;
}
.menu-button-current {
    border-right: 5px solid green !important;
    background-color: green !important;
}
.menu-button:hover {
    background-color: #6c757d!important;
    border-right: 5px solid blue !important;
    {{-- border-left: 5px solid blue !important; --}}
}
{{-- .menu-button:active {
    background-color: #6c757d!important;
    border: 4px solid red !important;
    border-style: double !important;
    border-radius: 2px !important;
} --}}

.col-pad-2{
    padding-right: 10px;
    padding-left: 10px;
}

.body-margin{
    margin-left:180px;
    margin-top: 52px;
}

.w3-light-grey, .w3-hover-light-grey:hover, .w3-light-gray, .w3-hover-light-gray:hover {
    color: #000!important;
    background-color: #343a40!important;
}

.trap-container {
  position: relative;
  /*Change this to test responsive*/
  width: 100%;
  /*change this to test responsive*/
  height: 100%;
}
.trap-container svg {
  position: absolute;
}
.trap-content {
  display: inline-block;
  position: relative;
  top: 10%;
  height: 80%;
  width: 100%;
  bottom: 10%;
  color: white;
}