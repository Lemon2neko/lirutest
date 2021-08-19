function tabclick(number) {
  var target = document.getElementById("con"+number);
  //一回全部表示させなくする
  var cnt = document.getElementsByClassName("tab").length;
  while(cnt>0){
    var offtab = document.getElementById("con"+cnt);
    offtab.className = "content";
    cnt=cnt-1;
  }
  target.className = "content show";
  
}