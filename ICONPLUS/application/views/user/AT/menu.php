  <ul class="sidebar-collapse nav menu">
            <li class="active"><a href="<?php echo base_url(); ?>index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>

           <li class="parent ">
                <a href="#">
                    <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> POP SBU
                </a>
                <ul class="children collapse" id="sub-item-1">
                       <li class="parent ">
                            <a href="#">
                                <span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Tipe POP
                            </a>
                            <ul class="children-children collapse" id="sub-item-2">
                                
                                <li class="parent">
                                    <a class="collapse" href="<?php echo base_url(); ?>index.php/Ctrl_pop/pop_Data/1/sb">
                                        <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> POP SB
                                    </a>
                                <li class="parent">
                                    <a class="collapse" href="<?php echo base_url(); ?>index.php/Ctrl_popbb/popbb_Data/1/bb">
                                        <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> POP BB
                                    </a>
                                </li>
                                <li>
                                    <a class="collapse" href="<?php echo base_url(); ?>index.php/Ctrl_popd/popd_Data/1/d">
                                        <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> POP D
                                    </a>
                                </li>                                                                    
                                </li>
                            </ul>
                            <a href="#">
                                <span data-toggle="collapse" href="#sub-item-4"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Berdasar Area
                            </a>
                            <ul class="children-children collapse" id="sub-item-4">
                                <li class="parent">
                                    <a class="collapse" href="<?php echo base_url(); ?>index.php/Ctrl_popab/popab_Data/1/ab">
                                        <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Area Barat
                                    </a>
                                <li class="parent">
                                    <a class="collapse" href="<?php echo base_url(); ?>index.php/Ctrl_popap/popap_Data/1/ap">
                                        <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Area Pusat
                                    </a>
                                </li>
                                <li>
                                    <a class="collapse" href="<?php echo base_url(); ?>index.php/Ctrl_popat/popat_Data/1/at">
                                        <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Area Timur
                                    </a>
                                </li>                                                                    
                                </li>
                            </ul>
                        </li>                
                </ul>
            </li>
            <li>
                    <form action="<?php echo site_url('Ctrl_popbb/search_key/') ?>" class="form-horizontal style-form" method="post" name="search" enctype="multipart/form-data">
                    <input type="text" class="form-control" name="search" id="search" placeholder="search" required />
                    <button type="submit" class="btn btn-primary">Search</button>
            </form>
            </li>

          <!--  <li class="parent ">
                <a href="#">
                    <span data-toggle="collapse" href="#sub-item-3"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Utilitas POP SBU
                </a>
                <ul class="children collapse" id="sub-item-3">
                       <li class="parent ">
                            <a href="<?php echo base_url(); ?>index.php/Ctrl_rack/rack_Data">
                                <span data-toggle="collapse" href="#sub-item-4"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-right"></use></svg></span> Rack Perangkat
                            </a>
                            <a href="<?php echo base_url(); ?>index.php/Ctrl_pwrspply/power_Data">
                                <span data-toggle="collapse" href="#sub-item-4"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-right"></use></svg></span> Power Suply
                            </a>
                            <a href="<?php echo base_url(); ?>index.php/Ctrl_sarpen/sarpen_Data">
                                <span data-toggle="collapse" href="#sub-item-4"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-right"></use></svg></span> SharPen POP
                            </a>                                                        
                        </li>

                </ul>
            </li> -->

            <li><a href="<?php echo base_url('index.php/Ctrl_pop/indexlogin/')?>"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a>
            </li>
        </ul>