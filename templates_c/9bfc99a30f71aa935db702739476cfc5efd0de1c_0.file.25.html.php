<?php
/* Smarty version 3.1.32, created on 2018-08-17 16:47:54
  from 'D:\UniServerZ\www\yukino\uploads\post\25\25.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b76ee2a79ee53_98083696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bfc99a30f71aa935db702739476cfc5efd0de1c' => 
    array (
      0 => 'D:\\UniServerZ\\www\\yukino\\uploads\\post\\25\\25.html',
      1 => 1534520872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b76ee2a79ee53_98083696 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="plugin/prism/prism.css" rel="stylesheet" />
<?php echo '<script'; ?>
 src="plugin/prism/prism.js"><?php echo '</script'; ?>
>
測試語法高亮度頁面
<pre>
    <code class="language-css">
body{
margin:0;
padding:0;
background: #000 url(img/bg.jpg) center center fixed no-repeat;
-moz-background-size: cover;
background-size: cover;
font-family: 微軟正黑體;
font-size: 18px;
color: rgb(255, 255, 255);
}

#head_pill{
background-color: rgba(0, 0, 0, 0.7);
min-height: 50px;
}

.container{
margin-right: auto;
margin-left: auto;
padding-right: 15px;
padding-left: 15px;
width: 100%;
max-width: 1400px;
}

#user_area{
background-color: rgba(0, 0, 0, 0.7);
padding: 30px;
margin-top: 20px;
margin-bottom: 20px;
}

#self{
background-color: rgba(0, 0, 0, 0.7);
padding: 30px;
margin-top: 20px;
margin-bottom: 20px;
}

#search {
background-color: rgba(0, 0, 0, 0.7);
padding: 30px;
margin-top: 20px;
margin-bottom: 20px;
}

#panel_side{
background-color: rgba(0, 0, 0, 0.7);
padding: 30px;
margin-top: 20px;
margin-bottom: 20px;
}

#system_main{
background-color: rgba(0, 0, 0, 0.7);
min-height: 1000px;
padding: 30px;
margin-top: 20px;
margin-bottom: 20px;
margin-right: 20px;
margin-left: 20px;
}

#system_foot{
background-color: rgba(0, 0, 0, 0.7);
color: #fff;
padding: 30px;
line-height: 1.8;
}

.text-skyblue{
color: rgb(0, 255, 255);
}

hr {
display: block;
height: 1px;
border: 0;
border-top: 1px solid #ccc;
margin: 1em 0;
padding: 0;
}

.waifu {
position: fixed;
bottom: 0;
left: 0;
z-index: 1;
font-size: 0;
transition: all .3s ease-in-out;
-webkit-transform: translateY(3px);
transform: translateY(3px);
}

.waifu:hover {
-webkit-transform: translateY(0);
transform: translateY(0);
}

@media (max-width: 768px) {
.waifu {
    display: none;
}
}

.waifu-tips {
opacity: 0;
width: 250px;
height: 70px;
margin: -20px 20px;
padding: 5px 10px;
border: 1px solid rgba(224, 186, 140, 0.62);
border-radius: 12px;
background-color: rgba(236, 217, 188, 0.5);
box-shadow: 0 3px 15px 2px rgba(191, 158, 118, 0.2);
font-size: 12px;
text-overflow: ellipsis;
overflow: hidden;
position: absolute;
animation-delay: 5s;
animation-duration: 50s;
animation-iteration-count: infinite;
animation-name: shake;
animation-timing-function: ease-in-out;
}

.waifu #live2d {
position: relative;
}

@keyframes shake {
2% {
    transform: translate(0.5px, -1.5px) rotate(-0.5deg);
}
4% {
    transform: translate(0.5px, 1.5px) rotate(1.5deg);
}
6% {
    transform: translate(1.5px, 1.5px) rotate(1.5deg);
}
8% {
    transform: translate(2.5px, 1.5px) rotate(0.5deg);
}
10% {
    transform: translate(0.5px, 2.5px) rotate(0.5deg);
}
12% {
    transform: translate(1.5px, 1.5px) rotate(0.5deg);
}
14% {
    transform: translate(0.5px, 0.5px) rotate(0.5deg);
}
16% {
    transform: translate(-1.5px, -0.5px) rotate(1.5deg);
}
18% {
    transform: translate(0.5px, 0.5px) rotate(1.5deg);
}
20% {
    transform: translate(2.5px, 2.5px) rotate(1.5deg);
}
22% {
    transform: translate(0.5px, -1.5px) rotate(1.5deg);
}
24% {
    transform: translate(-1.5px, 1.5px) rotate(-0.5deg);
}
26% {
    transform: translate(1.5px, 0.5px) rotate(1.5deg);
}
28% {
    transform: translate(-0.5px, -0.5px) rotate(-0.5deg);
}
30% {
    transform: translate(1.5px, -0.5px) rotate(-0.5deg);
}
32% {
    transform: translate(2.5px, -1.5px) rotate(1.5deg);
}
34% {
    transform: translate(2.5px, 2.5px) rotate(-0.5deg);
}
36% {
    transform: translate(0.5px, -1.5px) rotate(0.5deg);
}
38% {
    transform: translate(2.5px, -0.5px) rotate(-0.5deg);
}
40% {
    transform: translate(-0.5px, 2.5px) rotate(0.5deg);
}
42% {
    transform: translate(-1.5px, 2.5px) rotate(0.5deg);
}
44% {
    transform: translate(-1.5px, 1.5px) rotate(0.5deg);
}
46% {
    transform: translate(1.5px, -0.5px) rotate(-0.5deg);
}
48% {
    transform: translate(2.5px, -0.5px) rotate(0.5deg);
}
50% {
    transform: translate(-1.5px, 1.5px) rotate(0.5deg);
}
52% {
    transform: translate(-0.5px, 1.5px) rotate(0.5deg);
}
54% {
    transform: translate(-1.5px, 1.5px) rotate(0.5deg);
}
56% {
    transform: translate(0.5px, 2.5px) rotate(1.5deg);
}
58% {
    transform: translate(2.5px, 2.5px) rotate(0.5deg);
}
60% {
    transform: translate(2.5px, -1.5px) rotate(1.5deg);
}
62% {
    transform: translate(-1.5px, 0.5px) rotate(1.5deg);
}
64% {
    transform: translate(-1.5px, 1.5px) rotate(1.5deg);
}
66% {
    transform: translate(0.5px, 2.5px) rotate(1.5deg);
}
68% {
    transform: translate(2.5px, -1.5px) rotate(1.5deg);
}
70% {
    transform: translate(2.5px, 2.5px) rotate(0.5deg);
}
72% {
    transform: translate(-0.5px, -1.5px) rotate(1.5deg);
}
74% {
    transform: translate(-1.5px, 2.5px) rotate(1.5deg);
}
76% {
    transform: translate(-1.5px, 2.5px) rotate(1.5deg);
}
78% {
    transform: translate(-1.5px, 2.5px) rotate(0.5deg);
}
80% {
    transform: translate(-1.5px, 0.5px) rotate(-0.5deg);
}
82% {
    transform: translate(-1.5px, 0.5px) rotate(-0.5deg);
}
84% {
    transform: translate(-0.5px, 0.5px) rotate(1.5deg);
}
86% {
    transform: translate(2.5px, 1.5px) rotate(0.5deg);
}
88% {
    transform: translate(-1.5px, 0.5px) rotate(1.5deg);
}
90% {
    transform: translate(-1.5px, -0.5px) rotate(-0.5deg);
}
92% {
    transform: translate(-1.5px, -1.5px) rotate(1.5deg);
}
94% {
    transform: translate(0.5px, 0.5px) rotate(-0.5deg);
}
96% {
    transform: translate(2.5px, -0.5px) rotate(-0.5deg);
}
98% {
    transform: translate(-1.5px, -1.5px) rotate(-0.5deg);
}
0%,
100% {
    transform: translate(0, 0) rotate(0);
}
}

.btn-purple {
color: #fff;
background-color: rgb(223, 16, 223);
border-color: rgb(223, 16, 223);
}

.btn-purple:hover,
.btn-purple:focus,
.btn-purple:active:hover {
color: #fff;
background-color: rgb(223, 16, 223);
border-color: rgb(223, 16, 223);
}
    </code>
</pre><?php }
}