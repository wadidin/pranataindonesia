
                                    <ul class="menu"> 
                                        <li class="home" <?php if($uri1==null){ } ?>>
                                            <a href="<?php echo base_url(); ?>" class="<?=($this->router->method==="index")?"active":"not-active"?>">Home</a>

                                        <?php foreach($menu->result() as $menu): ?>

                                        <li <?php
                                        if($uri1==$menu->menu_url){}?> >
                                            <a class='<?=($this->router->method==='$menu->content_id;')?'active':'not-active'?>' href='<?php if($menu->view_type=='4') {
                                                                echo $menu->content_id; 
                                                            } else if($menu->view_type=='2'){echo base_url('halaman/'.$menu->content_id.'/');
                                                            } else if('hal/'.$menu->view_type=='4'){echo base_url('halaman/'.$menu->content_id.'/');
                                        } else { 
                                            echo base_url('halaman/'.$menu->content_id.'/'); }?>'>

                                        <?php echo $menu->menu_name?></a>


                                        <?php $child=$this->Model_Site->GetChildMenu($menu->menu_id); 
                                            if($child != null) {
                                        ?>


                                        <ul class="submenu">
                                            <?php foreach($child->result() as $child): ?> 
                                        <li><a href="<?php if($child->view_type=='1') {
                                                                echo  'halaman/'.$child->content_id.'/';    
                                                            } else if($child->view_type=='2') {
                                                                echo base_url('halaman/'.$child->content_id.'/');
                                                            } else if($child->view_type=='4') {
                                                                echo base_url('halaman/'.$child->content_id.'/');
                                                            } else { 
                                                                echo base_url('halaman/'.$menu->menu_url."/".$child->menu_url); 
                                                            } ?>">
                                            <?php echo $child->menu_name ?></a>
                                        </li>
                                        
                                        <?php endforeach; ?>  
                                        </ul>

                                        <?php } ?>
                                        </li>

                                        <?php endforeach; ?>

                                        <li class="<?=($this->router->method==="berita")?"active":"not-active"?>"><a href="<?php echo base_url(); ?>berita">Berita</a></li>
                                        <li><a href="<?php echo base_url(); ?>hubungi-kami/" class="<?=($this->router->method==="kontak")?"active":"not-active"?>">Hubungi Kami</a></li>
                                    </ul><!-- /.menu -->
                                    
