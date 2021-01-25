<?php
function drawborec():void {
$size = 250;
?>
 <img src="chad.jpg" style="width: <?= $size; ?>px; height: <?= $size; ?>px;"> 
 <?php } ?>

<?php
function drawsvaly():void {
$size = 250;
?> 
 <img src="svaly.jpg" style="width: <?= $size; ?>px; height: <?= $size; ?>px;"> 
<?php } ?>

<?php
function drawcool():void {
$size = 250;?>

 <img src="cinka.jpeg" style="width: <?= $size; ?>px; height: <?= $size; ?>px;"> 
<?php } ?>

<?php
function drawmeditace():void {
$size = 250;?>

 <img src="meditation.png" style="width: <?= $size; ?>px; height: <?= $size; ?>px;">
<?php } ?>

<?php
function drawpushup():void {
$size = 250;?>

 <img src="pushup.jpg" style="width: <?= $size; ?>px; height: <?= $size; ?>px;">
<?php } ?>

<?php
function drawflexing():void {
$size = 250;?>

 <img src="cool.jpg" style="width: <?= $size; ?>px; height: <?= $size; ?>px;">
<?php } ?>

<?php
function drawleg():void {
$size = 250;?>

 <img src="leg.png" style="width: <?= $size; ?>px; height: <?= $size; ?>px;">
<?php } ?>

<?php
function drawbench():void {
$size = 250;?>

 <img src="benchpress.jpg" style="width: <?= $size; ?>px; height: <?= $size; ?>px;">
<?php } ?>

<?php
function drawculturista():void {
$size = 250;?>

 <img src="culturista.png" style="width: <?= $size; ?>px; height: <?= $size; ?>px;">
<?php } ?>

<?php
function drawruka():void {

?>
 <?php drawsvaly() ?>
 <?php drawcool() ?>
 <?php drawpushup() ?>
 <?php drawbench() ?>
<?php } ?>

<?php
function drawcelejtelo():void {
?>
<?php drawflexing() ?>
<?php drawmeditace() ?>
<?php drawborec() ?>
<?php } ?>

<?php
function drawnoha():void {
?>
 <?php drawleg() ?>
<?php } ?>

<?php
function drawcviky():void {
?>
 <?php drawruka() ?>
 <?php drawculturista() ?>
 <?php drawcelejtelo() ?>
 <?php drawnoha() ?>
<?php } ?>
