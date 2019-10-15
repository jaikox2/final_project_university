<nav class="col-md-2 d-none d-md-block bg-light sidebar">
  <div class="sidebar-sticky">
    <ul class="nav flex-column">
      <?php
        $full_name = $_SERVER['PHP_SELF'];
        $page=$_GET["page"];
        $name_array = explode('/',$full_name);
        $count = count($name_array);
        $page_name = $name_array[$count-1];
    ?>
      <li class="nav-item">
        <a class="nav-link <?php if($page=='ordering'){echo 'active';}?>" href="homemenu.php?page=ordering">
          <span data-feather="home"></span>
          รายการดำเนินการสั่งอาหาร<span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($page=='ordered'){echo 'active';}?>" href="homemenu.php?page=ordered">
          <span data-feather="file"></span>
          ประวัติการสั่งอาหาร
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($page=='deliveryUser'){echo 'active';}?>" href="homemenu.php?page=deliveryUser">
          <span data-feather="shopping-cart"></span>
          จัดการผู้ใช้ส่งอาหาร
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($page=='restaurantUser'){echo 'active';}?>" href="homemenu.php?page=restaurantUser">
          <span data-feather="users"></span>
          จัดการผู้ใช้ร้านอาหาร
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($page=='deliveryIncome'){echo 'active';}?>" href="homemenu.php?page=deliveryIncome">
          <span data-feather="bar-chart-2"></span>
          ดูรายได้ของผู้ส่งอาหาร
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($page=='restaurantIncome'){echo 'active';}?>" href="homemenu.php?page=restaurantIncome">
          <span data-feather="layers"></span>
          ดูรายได้ของร้านอาหาร
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($page=='foodRecom'){echo 'active';}?>" href="homemenu.php?page=foodRecom">
          <span data-feather="layers"></span>
          จัดการอาหารแนะนำ
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($page=='fillCredit'){echo 'active';}?>" href="homemenu.php?page=fillCredit">
          <span data-feather="layers"></span>
          เติมเครดิต
        </a>
      </li>
    </ul>
  </div>
</nav>
