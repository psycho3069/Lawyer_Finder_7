.bg-white {
    background-color: #a5eeff !important;
}
body {
    {{-- background-color: white; --}}

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
    max-width: 1400px;

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

.radio-pad{
    padding-top: 8px;
}

.button {
    border-radius: 1px;
    background-color: maroon;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 16px;
    width: 20%;
    transition: all 0.5s;
    cursor: pointer;
    min-height: 45px;
    line-height: 1.6em;
}

.button span {
  cursor: pointer;
  position: relative;
  transition: 0.5s;
}

.button span:after {
    content: '\002b';
    position: absolute;
    opacity: 0;
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
    color: black;
    background-color: white!important;
}
.menu-button-current {
    color: white;
    border-right: 5px solid #f1d1d2 !important;
    background-color: maroon !important;
}
.menu-button:hover {
    color: black;
    background-color: #f1d1d2!important;
    border-right: 5px solid maroon !important;
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

.numbers{
  color: gray;
}

.footer {
    background-color: #000000;
    color: rgba(255,255,255,0.5);
    line-height: 1.0em;
    font-size: 12px;
    position: fixed;
    bottom: 0;
    width: 100%;
}

@keyframes animatedBackground {
    from {
        background-position: 0 0;
    }
    to {
        background-position: 100% 0;
    }
}
#animate-area {
    width: 100%;
    height: 300px;
    background-position: 0px 0px;
    background-repeat: repeat-x;
    animation: animatedBackground 10s linear infinite alternate;
}

.contact-item {
    background-color: #f5f5f5;
    height: 135px;
    padding: 30px 20px;
    text-align: center;
    line-height: 22px;
}

.faq_list_items .item {
    display: flex;
    margin-top: 10px;
    width: 100%;
}

.item_index {
    color: gray;
    font-size: 32px;
    line-height: 1.2em;
    padding-right: 15px;
    margin-top: 5px;
}

.item_data {
    font-size: 14px;
    border-bottom: 1px dashed #ddd;
    padding-bottom: 10px;
}

.edit-profile{
    border-radius: 0;
    height: 40px;
    margin: 5px 0px 5px 0px;
}

#content{
    margin-top: 95px;
    border: 1px solid lightgray;
    background-color: white;
    margin-bottom: 40px;
}


// star rating
div.stars {
  width: auto;
  display: inline-block;
}

input.star { display: none; }

label.star {
  {{-- float: right; --}}
    padding: 5px;
    font-size: 35px;
    color: #444;
    transition: all .5s;
}

input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .5s;
}

input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before { color: #F62; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}