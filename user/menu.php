<ul class="sidebar-menu">
    <li class="menu-header">Main Menu</li>
    <li><a class="nav-link" href="."><i class="fas fa-home fa-fw"></i> <span>Beranda</span></a></li>
    <?php if ($user['level'] == '1') { ?>
        <li class="dropdown ">
            <a class="nav-link" href="?pg=usulan"><i class="fas far fa-edit fa-fw"></i> 
            <span>Buat Usulan Baru</span></a>
        </li>
        <li>
            <a class="nav-link" href="?pg=riwayat"><i class="fas fa-history"></i>
            <span>Riwayat Usulan</span></a>
        </li>
    <?php } ?>



</ul>