$(function() {
  const isRtl = $("html").attr("dir") === "rtl"

  $("#widget-carousel").slick({
    rtl: isRtl, // Carousel direction
    asNavFor: "#widget-carousel-nav", // Make this carousel as navigation for #widget-carousel-nav carousel
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false
  })

  $("#widget-carousel-nav").slick({
    rtl: isRtl, // Carousel direction
    asNavFor: "#widget-carousel", // Make this carousel as navigation for #widget-carousel carousel
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    centerMode: true
  })

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

  const widgetChart5 = new ApexCharts(document.querySelector("#widget-chart-5"), {
    ...themeOptions[themeVariantDefault], // Add theme option to chart
    series: [
      {
        name: "Sales",
        data: [640, 400, 760, 620, 980, 640]
      }
    ],
    chart: {
      type: "area",
      background: "transparent",
      height: 300,
      toolbar: {
        show: false
      }
    },
    dataLabels: {
      enabled: false
    },
    fill: {
      opacity: 0,
      type: "solid",
    },
    stroke: {
      show: true,
      colors: [colors.blue],
      lineCap: "round"
    },
    markers: {
      colors: [isDarkDefault ? colors.black : colors.white],
      strokeWidth: 4,
      strokeColors: colors.blue
    },
    tooltip: {
      marker: {
        show: false
      },
      y: {
        formatter: val => `${val} Products` // Format chart tooltip value
      }
    },
    xaxis: {
      categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"]
    }
  })

  // Render all chart widgets
  widgetChart3.each(function() {
    this.render()
  })
  widgetChart5.render()

  // Theme toggle listener
  $("#theme-toggle").on("click", function() {
    // Get theme data
    const isDark = $("html").attr("data-theme") == 'dark'
    const themeVariant = isDark ? "dark" : "light"

    // Update all widget colors
    widgetChart3.each(function() {
      this.updateOptions({
        ...themeOptions[themeVariant],
        markers: { colors: [isDark ? colors.black : colors.white] }
      })
    })
    widgetChart5.updateOptions({
      ...themeOptions[themeVariant],
      markers: { colors: [isDark ? colors.black : colors.white] }
    })
  })
})