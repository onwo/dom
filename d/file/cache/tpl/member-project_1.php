<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header2');?>
<div class="u_wsxq">
<div class="u_wsxq_baner">
<img src="<?php echo DT_SKIN;?>/image/u_wsxq_ban.jpg" alt="">
</div>
<div class="u_mbxdh">
<span>·您的位置：<a href="">首页</a> > <a href="">商城</a> > <a href="">提交订单</a> > <a href="">完善网站需求</a></span>
</div>
<!-- 订单详情 -->
<div class="u_ddxqsw">
<div class="u_ddxqsw_t"><span>订单详情</span></div>
<div class="u_ddxqsw_con">
<div class="u_ddxqsw_con_l">
<span><b>公司名称：</b><?php echo $td['buyer_name'];?>（<?php echo $td['title'];?>）</span>
<span><b>订单编号：</b><?php echo $td['itemid'];?></span>
<span><b>所在地区：</b><?php echo $td['areaid'];?></span>

<span><b><i>项目状态：</i></b><?php echo $td['status_zt'];?>（<i>已付款<?php echo $td['ready_money'];?>元  </i>）</span>
</div>
<div class="u_ddxqsw_con_r">
<span><b>订单总金额：</b><i><b><?php echo $td['amount'];?>元</b></i></span>
<span><b>订单时间：</b><?php echo $td['adddate'];?></span>
<span><b>行业：</b><?php echo $td['hy_sort'];?></span>
<span><a href="message.php?action=send&touser=<?php echo $td['buyer'];?>" target="_blank"><img src="<?php echo DT_SKIN;?>/image/fasongzhanneixin.gif" alt=""></a>&nbsp;<a href="chat.php?touser=<?php echo $td['buyer'];?>&mid=16&itemid=<?php echo $td['itemid'];?>"  target="_blank"><img src="<?php echo DT_SKIN;?>/image/onlingoutong.gif" alt=""></a></span>
</div>
</div>
</div>
<!-- 订单详情 结束-->
<!-- 建站资料开始 -->
<!-- 建站资料选项卡 -->


  <div class="js_case clear">
    <div class="js_title cf">

      <ul class="js_title-list cf">
     <li><a href="project.php?itemid=<?php echo $itemid;?>&action=update&step=upload_5&forward=<?php echo $_GET['forward'];?>">建站资料</a></li>
        <li><a href="project.php?itemid=<?php echo $itemid;?>&action=update&step=index&forward=<?php echo $_GET['forward'];?>">首页设计</a></li>
        <li  class="on"><a href="project.php?itemid=<?php echo $itemid;?>&action=update&step=lm&forward=<?php echo $_GET['forward'];?>">栏目页及内页设计</a></li>
       <li><a href="project.php?itemid=<?php echo $itemid;?>&action=update&step=design&forward=<?php echo $_GET['forward'];?>">PSD上传</a></li>
        <li><a href="project.php?itemid=<?php echo $itemid;?>&action=update&step=last&forward=<?php echo $_GET['forward'];?>">网站上线</a></li>
      </ul>
    </div>
    <div class="product-wrap">
     <!--建站资料-->
     <div class="js_product" >
     </div>
<div class="js_product ">
</div>
<div class="js_product show">
<form method="post" action="project.php" id="dform">
<input type="hidden" name="forward" value="<?php echo $CFG['url'];?>/member/project.php?itemid=<?php echo $itemid;?>&action=<?php echo $action;?>&step=<?php echo $step;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" value="" name="picid" id="picid">
<input type="hidden" name="confirm_order" value="1"/>
        <div class="u_jzzl_lanmuneiye" id="u_jzzl_lanmuneiye">
        
          <div class="u_jzzl_index_sj_k" id="u_jzzl_index_sj_k">
          <!--      /*0423新的设计师栏目及内页设计稿*/ -->
<div class="SJS_lanmugao">
  <div class="SJS_lanmugao_title">
    <p><b>栏目页及内页设计稿：</b><a href=""><i>(点击图片下链接可以模拟网页浏览)</i></a></p>
  </div>
  <div class="SJS_lanmugao_title_x"></div>
  <div class="SJS_lanmugaolist">
    <ul>
     <?php if(is_array($lms)) { foreach($lms as $i => $v) { ?>
                <?php if($td['status']==5) { ?>
                               <li>
                                    <div class="">
            
                                    <input type="hidden" name="pot[thumb<?php echo $v['id'];?>]" id="thumb<?php echo $v['id'];?>" value="1"/>
                                   <img src="<?php echo $v['upload'];?>" alt="" id="showthumb<?php echo $v['id'];?>" onclick="Dalbum('<?php echo $v['id'];?>',<?php echo $moduleid;?>,<?php echo $MOD1['thumb_width'];?>,<?php echo $MOD1['thumb_height'];?>, Dd('showthumb<?php echo $v['id'];?>').value, true);"/>
                                    <span><?php echo $v['note'];?></span>
                                    </div>
                                   <p><a href="<?php echo $CFG['url'];?>extend/view_pic.php?img=<?php echo $v['upload'];?>" target="_blank" >模拟网页浏览>></a></p>
                                </li>
                                
                                  <?php } else { ?>
                                  <li>
                                    <div class="">
                                   <img src="<?php echo $v['upload'];?>" alt="" id="showthumb<?php echo $v['id'];?>"/>
                                    <span><?php echo $v['addtime'];?></span>
                                    </div>
                                   <p><a href="<?php echo $CFG['url'];?>extend/view_pic.php?img=<?php echo $v['upload'];?>" target="_blank" >模拟网页浏览>></a></p>
                                </li>
                                  <?php } ?>
                                
                             
           <?php } } ?>
    </ul>
  </div>
</div>
<div class="SJS_lanmugao clear">
  <div class="SJS_lanmugao_title">
    <p><b>首页最终稿：</b><a href=""><i>(点击图片下链接可以模拟网页浏览)</i></a></p>
  </div>
  <div class="SJS_lanmugao_title_x"></div>
  <div class="SJS_lanmugaolist">
    <ul>
  <li>
                                    <div class="">
                                    <a href="<?php echo $CFG['url'];?>extend/view_pic.php?img=<?php echo $index_last['upload'];?>" target="_blank"><img src="<?php echo $index_last['upload'];?>" alt=""></a>
                                    <span><?php echo $index_last['addtime'];?></span>
                                    </div>
                                   <p><a href="<?php echo $CFG['url'];?>extend/view_pic.php?img=<?php echo $index_last['upload'];?>" target="_blank">模拟网页浏览>></a></p>
                                    
                                </li>
    </ul>
  </div>
</div>
<!-- /*0423新的设计师栏目及内页设计稿 end*/ -->
          
          
               
                <div class="u_shejisTiJ_ZuoPin_time clear">
                  <div class="u_shejisTiJ_ZuoPin_time_t"><b>栏目页及内页提交：<i>内页提交倒计时：4天11小时13分05秒</i></b></div>
                  <div class="u_shejisTiJ_ZuoPin_lanmu">
                    <div class="u_shejisTiJ_ZuoPin_lanmu_p">
                      <p>注：栏目页及内页设计稿确认后，网站将进入程序开发阶段，此时页面将不再变动，如果需要变动将收取一定的费用。如需变动页面内容，请联系客服。同意请点击页面确认。</p>
                    </div>
                    <?php if($td['status']==5 && $td['y']==1) { ?>
                    <div class="u_shejisTiJ_ZuoPin_lanmu_cont">
                      <div class="u_shejisTiJ_ZuoPin_lanmu_cont_l">
                        <b>栏目名称</b> <input type="text" name="pot[titledb0]" id="title" placeholder="栏目名称" value="<?php echo $title;?>"/>  
                      </div>
                      <div class="u_shejisTiJ_ZuoPin_lanmu_cont_m">
                        <span> <input type="hidden" name="post[upload]" id="thumb" value="<?php echo $thumb;?>"/></b><span><img src="<?php if($thumb) { ?><?php echo $thumb;?><?php } else { ?><?php echo DT_SKIN;?>image/waitpic.gif<?php } ?>
" width="100" height="100" id="showthumb" title="预览图片" alt="" onclick="if(this.src.indexOf('waitpic.gif') == -1){_preview(Dd('showthumb').src, 1);}else{Dalbum('',<?php echo $moduleid;?>,<?php echo $MOD1['thumb_width'];?>,<?php echo $MOD1['thumb_height'];?>, Dd('thumb').value, true);}"/>
                     <div style='height: 10px;line-height: 20px;padding-left: 16px;'><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/img_upload.gif" width="12" height="12" title="上传" onclick="Dalbum('',<?php echo $moduleid;?>,<?php echo $MOD1['thumb_width'];?>,<?php echo $MOD1['thumb_height'];?>, Dd('thumb').value, true);"/>&nbsp;&nbsp;<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/img_select.gif" width="12" height="12" title="选择" onclick="selAlbum('');"/>&nbsp;&nbsp;<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/img_delete.gif" width="12" height="12" title="删除" onclick="delAlbum('','wait');"/></div></span>
                      </div>
                      <div class="u_shejisTiJ_ZuoPin_lanmu_cont_r">
                       <p> <input type="checkbox" value="1" name="sendsms" >短信通知客户 (我的可用短信 <i> <?php echo $_sms;?> </i>条)</p>
                      <p> 支持文件格式：jpg</p>
                      </div>
                      <div class="u_shejisTiJ_ZuoPin_lanmu_cont_btn">
                        <input type="submit" value="提交" name="submit">
                      </div>
                    </div>
                    <?php } else { ?>
                    <?php } ?>
                  </div>
                </div>
               
              
          </div></form>
          </div>
          
          
  
  
</div>
<div class="js_product">
</div>
<div class="js_product"></div>
     
    </div>
  </div>
<!-- 建站资料选项卡 结束-->
<!-- 建站资料结束 -->
<script>
$(function(){   
  $('.SJS_lanmugaolist ul li').hover(function(){
        
      
        $(this).find('span').css('display','block');
        $(this).find('div img').css('filter','alpha(optacity=70)');
        $(this).find('div img').css('opacity','0.7');
       
    },function(){
      
        $(this).find('span').css('display','none');
         $(this).find('div img').css('opacity','1');
        $(this).find('div img').css('filter','alpha(opacity=100)');
      
      
    });
    });
</script>
<?php include template('footer');?>