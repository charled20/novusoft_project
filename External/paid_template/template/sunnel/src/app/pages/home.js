$(function() {
  // Set default theme variation variables
  const isDarkDefault = localStorage.getItem("theme-variant") == "dark"
  const themeVariantDefault = isDarkDefault ? "dark" : "light"

  // Currency formatter for supporting chart widgets
  const currency = new Intl.NumberFormat("en-US", {
    style: "currency",
    currency: "USD",
    minimumFractionDigits: 0
  })

  // Collection of hex colors for chart widgets
  const colors = {
    blue: "#2196f3",
    green: "#4caf50",
    red: "#f44336",
    white: "#fff",
    black: "#424242"
  }

  // Chart widgets theme options
  const themeOptions = {
    light: {
      theme: {
        mode: "light",
        palette: "palette1"
      }
    },
    dark: {
      theme: {
        mode: "dark",
        palette: "palette1"
      }
    }
  }

  const widgetChart2 = new ApexCharts(document.querySelector("#widget-chart-2"), {
    ...themeOptions[themeVariantDefault], // Add theme option to chart
    series: [
      {
        name: "Revenue",
        data: [4000, 9600, 4600, 13600, 6800, 14600, 11000]
      },
      {
        name: "Profit",
        data: [3100, 8000, 2800, 5100, 2000, 10900, 10000]
      }
    ],
    chart: {
      type: "area",
      height: 300,
      background: "transparent",
      sparkline: {
        enabled: true
      }
    },
    fill: {
      opacity: 0.8,
      type: "solid"
    },
    markers: {
      strokeColors: isDarkDefault ? colors.black : colors.white
    },
    stroke: {
      show: false
    },
    tooltip: {
      y: {
        formatter: val => currency.format(val) // Format chart tooltip value
      }
    },
    xaxis: {
      categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep"],
      crosshairs: {
        show: false
      }
    },
    responsive: [
      {
        breakpoint: 576,
        options: {
          chart: {
            height: 200
          }
        }
      }
    ]
  })

  const widgetChart3 = $(".widget-chart-3").map(function() {
    // Get chart properties from dom
    let color = $(this).data("chart-color")
    let label = $(this).data("chart-label")
    let series = $(this)
      .data("chart-series")
      .split(",")
      .map(data => Number(data))

    return new ApexCharts(this, {
      ...themeOptions[themeVariantDefault], // Add theme option to chart
      series: [
        {
          name: label,
          data: series
        }
      ],
      chart: {
        type: "area",
        height: 50,
        background: "transparent",
        sparkline: {
          enabled: true
        }
      },
      fill: {
        opacity: 0,
        type: "solid"
      },
      stroke: {
        show: true,
        colors: [color],
        lineCap: "round"
      },
      markers: {
        colors: [isDarkDefault ? colors.black : colors.white],
        strokeWidth: 4,
        strokeColors: color
      },
      tooltip: {
        followCursor: true,
        marker: {
          show: false
        },
        x: {
          show: false
        },
        y: {
          formatter: val => `${val} Tests` // Format chart tooltip value
        },
        fixed: {
          enabled: true,
          position: "topLeft",
          offsetY: -30
        }
      },
      xaxis: {
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
        crosshairs: {
          show: false
        }
      }
    })
  })

  // Render all chart widgets
  widgetChart2.render()
  widgetChart3.each(function() {
    this.render()
  })

  // Theme toggle listener
  $("#theme-toggle").on("click", function() {
    // Get theme data
    const isDark = $("html").attr("data-theme") == 'dark'
    const themeVariant = isDark ? "dark" : "light"

    // Update all widget colors
    widgetChart2.updateOptions({
      ...themeOptions[themeVariant],
      markers: { strokeColors: isDark ? colors.black : colors.white }
    })
    widgetChart3.each(function() {
      this.updateOptions({
        ...themeOptions[themeVariant],
        markers: { colors: [isDark ? colors.black : colors.white] }
      })
    })
  })
})