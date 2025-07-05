@extends('layouts.admin.layout-admin')
@section('title', 'Liste des Étudiants')
@section('content')
    <!-- ===== Preloader Start ===== -->
    <?php 
    include('dashboard/partials/preloader.html')
    ?>
    <!-- ===== Preloader End ===== -->

    <!-- ===== Page Wrapper Start ===== -->
    <div class="flex h-screen overflow-hidden">
      <!-- ===== Sidebar Start ===== -->
      <?php
      include("dashboard/partials/sidebar.html")
        
      ?>
      <!-- ===== Sidebar End ===== -->

      <!-- ===== Content Area Start ===== -->
      <div
        class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto"
      >
        <!-- Small Device Overlay Start -->
        <?php 
        include('dashboard/partials/overlay.html')
        ?>
        <!-- Small Device Overlay End -->

        <!-- ===== Header Start ===== -->
        <?php 
        include('dashboard/partials/header.html')       
          ?>

        <!-- ===== Main Content Start ===== -->
        <main>
          <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
            <div class="grid grid-cols-12 gap-4 md:gap-6">
              <div class="col-span-12 space-y-6 xl:col-span-7">
                <!-- Metric Group One -->
                <?php 
                include('dashboard/partials/metric-group/metric-group-01.html')
                ?>
                <!-- Metric Group One -->

                <!-- ====== Chart One Start -->
                <?php 
                include('dashboard/partials/chart/chart-01.html')
                ?>
                <!-- ====== Chart One End -->
              </div>
              <div class="col-span-12 xl:col-span-5">
                <!-- ====== Chart Two Start -->
                <?php 
                include('dashboard/partials/chart/chart-02.html')
                ?>
                <!-- ====== Chart Two End -->
              </div>

              <div class="col-span-12">
                <!-- ====== Chart Three Start -->
                <?php 
                include('dashboard/partials/chart/chart-03.html')
                ?>
                <!-- ====== Chart Three End -->
              </div>

              <div class="col-span-12 xl:col-span-5">
                <!-- ====== Map One Start -->
                <?php 
                include('dashboard/partials/map-01.html')
                ?>
                <!-- ====== Map One End -->
              </div>

              <div class="col-span-12 xl:col-span-7">
                <!-- ====== Table One Start -->
                <?php 
                include('dashboard/partials/table/table-01.html')
                ?>
                <!-- ====== Table One End -->
              </div>
            </div>
          </div>
        </main>
        <!-- ===== Main Content End ===== -->
      </div>
      <!-- ===== Content Area End ===== -->
    </div>
    <!-- ===== Page Wrapper End ===== -->
  @endsection
