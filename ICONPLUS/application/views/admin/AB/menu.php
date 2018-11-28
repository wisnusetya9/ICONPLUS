<ul class="nav nav-list">
                    <li class="">
                        <a href="<?php echo base_url(); ?>index.php/Home/">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> Dashboard </span>
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-desktop"></i>
                            <span class="menu-text">
                                POP SBU
                            </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Tipe POP
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>

                                <ul class="submenu">
                                    <li class="">
                                        <a href="<?php echo base_url(); ?>index.php/Ctrl_pop/pop_Data/1/sb">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            POP SB
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                         <a href="<?php echo base_url(); ?>index.php/Ctrl_popbb/popbb_Data/1/bb">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            POP BB
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                         <a href="<?php echo base_url(); ?>index.php/Ctrl_popd/popd_Data/1/d">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            POP D
                                        </a>

                                        <b class="arrow"></b>
                                    </li>
                                </ul>
                            </li>

                            <li class="">
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Berdasar Area
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>

                                <ul class="submenu">
                                    <li class="">
                                        <a href="<?php echo base_url(); ?>index.php/Ctrl_popab/popab_Data/1/ab">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Area Barat
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                        <a href="<?php echo base_url(); ?>index.php/Ctrl_popap/popap_Data/1/ap">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Area Pusat
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                        <a href="<?php echo base_url(); ?>index.php/Ctrl_popat/popat_Data/1/at">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Area Timur
                                        </a>

                                        <b class="arrow"></b>
                                    </li>
                                </ul>

                            </li>


                        </ul>
                    </li>

                   <!--  <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-desktop"></i>
                            <span class="menu-text">
                                Utilitas POP SBU
                            </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                             <li class="">
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Tipe POP
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>
                                </li>

                        </ul>
                    </li> -->
                   

                    <li class="">
                        <form action="<?php echo site_url('Ctrl_popab/search_key/') ?>" class="form-search" method="post" name="search" enctype="multipart/form-data">
                            <li class="">
                                <span class="input-icon">
                                    <input type="text" class="nav-search-input" name="search" id="search" placeholder="search" required/>
                                    <i class="ace-icon fa fa-search nav-search-icon"></i>
                                    <button type="submit" class="form-control btn btn-primary">Search</button> 
                                </span>
                            </li>
                        </form>
                    </li>

                </ul><!-- /.nav-list -->