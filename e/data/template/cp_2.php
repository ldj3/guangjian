<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?></td>
        </tr>
      </table></td>
</tr>
</table>
<span class="blank15_jun"></span>

<div class="box">
 	<div class="footer_bottom" id="footer">
             <?=$public_r['add_footer']?>
       </div>
</div>

<script>
function ct(){
	return document.compatMode == "BackCompat"? document.body.clientHeight:document.documentElement.clientHeight;
}
var f=document.getElementById("footer");
(window.onresize=function(){
  if(document.body.scrollHeight<ct()){
	  f.style.position='absolute';
	  f.style.bottom=0;
  } else {
		
  }
})();
</script>
</body>
</html>