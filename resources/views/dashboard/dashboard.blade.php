@extends('admin.layout')
@section('content')
    <div class="w-full h-max flex flex-col gap-y-8">
        <div class="flex flex-col w-full justify-between h-max">
          <h1 class="text-2xl font-inter font-bold text-color1">Grafik Quantity Penjualanan</h1>
          <canvas id="myChart"></canvas>
        </div>
        <div class="flex w-full justify-between">
            <div class="w-[48%] h-[200px] flex flex-col">
              <h1 class="font-inter text-2xl text-color1 font-bold">Data jumlah buku</h1>
              <div class="flex h-full w-full items-center">
                <p class="font-inter text-6xl font-bold text-slate-600">{{ $totalRow }} Buku</p>
              </div>
            </div>
            <div class="w-[48%] h-[200px] flex flex-col">
              <h1 class="font-inter text-2xl text-color1 font-bold">Data Buku Terjual</h1>
              <div class="flex h-full w-full items-center">
                <p class="font-inter text-6xl font-bold text-slate-600">{{ $totalQty }} Buku</p>
              </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {{-- <script>
        var lbls = {{ Js::from($lbl) }};
        var total = {{ js::from($dt) }};
        var ctx = document.getElementById('BarChart');
        var ltx = document.getElementById('LineChart');
        var BarChart = new Chart(ctx, {
          type: 'bar',
          data: {
            labels: lbls,
            datasets: [{
              label: "Total Pemasukan",
              backgroundColor: 'rgba(2,117,216,1)',
              borderColor: 'rgba(2,117,216,1)',
              data: total,
            }],
          },
          options: {
            scales: {
              xAxes: [{
                time: {
                  unit: 'Tanggal'
                },
                gridLines: {
                  display: false
                },
                ticks: {
                  maxTicksLimit: 6
                }
              }],
              yAxes: [{
                ticks: {
                  min: 0,
                  max: 10,
                  maxTicksLimit: 5
                },
                gridLines: {
                  display: true
                }
              }],
            },
            legend: {
              display: false
            }
          }
        })

        var LineChart = new Chart(ltx, {
          type: 'doughnut',
          data: {
            labels: lbls,
            datasets: [{
              label: "Total Pemasukan",
              backgroundColor: 'rgba(2,117,216,1)',
              borderColor: 'rgba(2,117,216,1)',
              data: total,
            }],
          },
          options: {
            scales: {
              xAxes: [{
                time: {
                  unit: 'Tanggal'
                },
                gridLines: {
                  display: false
                },
                ticks: {
                  maxTicksLimit: 6
                }
              }],
              yAxes: [{
                ticks: {
                  min: 0,
                  max: 10,
                  maxTicksLimit: 5
                },
                gridLines: {
                  display: true
                }
              }],
            },
            legend: {
              display: false
            }
          }
        })
      </script> --}}

<script>
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: @json($lbl),
      datasets: [{
        label: 'Penghasilan',
        data: @json($dt),
        borderColor: 'rgb(75, 192, 192)',
        fill: false,
      }]
    },
  });
</script>

@endsection