function OpravitRequired(e){
var Inputy,i;
function ZjistitPodporuRequiredu(){
return ('required' in document.createElement('input'));
}
function Obarvit(){
return function(){
if(this.value.length===0){
e.preventDefault();
this.value='Vyplňte prosím toto pole';
this.style.color='red';
this.style.outline='1px solid red';
return false;
}};}
if(!ZjistitPodporuRequiredu()){
Inputy=document.getElementsByTagName('input');
for(i=0;i<Inputy.length;i++){
if(Inputy[i].getAttribute('required')){
Inputy[i].onblur=Obarvit();
}}}}