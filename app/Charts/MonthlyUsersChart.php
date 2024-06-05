<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class MonthlyUsersChart
{
  protected $chart;

  public function __construct(LarapexChart $chart)
  {
    $this->chart = $chart;
  }

  public function build(): \ArielMejiaDev\LarapexCharts\AreaChart
  {
    return $this->chart->areaChart()
      ->setTitle('Sales during 2021.')
      ->setSubtitle('Physical sales vs Digital sales.')
      ->addData('Physical sales', [40, 93, 35, 42, 18, 82])
      ->addData('Digital sales', [70, 29, 77, 28, 55, 45])
      ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);

    /* return $this->chart->areaChart()
      ->setTitle('Approved and Not Approved Proposals')
      ->addData('Approved Proposals', [2, 4, 6, 8, 10, 12]) // Replace with your actual data
      ->addData('Not Approved Proposals', [2, 4, 6, 8, 10, 12]) // Replace with your actual data
      ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']); */
  }
}
