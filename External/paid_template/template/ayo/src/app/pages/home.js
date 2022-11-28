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

  const widgetChart6 = new ApexCharts(document.querySelector("#widget-chart-6"), {
    ...themeOptions[themeVariantDefault], // Add theme option to chart
    series: [
      {
        name: "Unique",
        data: [6400, 4000, 7600, 6200, 9800, 6400, 8600, 7000]
      }
    ],
    chart: {
      type: "area",
      background: "transparent",
      height: 300,
      sparkline: {
        enabled: true
      }
    },
    markers: {
      strokeColors: isDarkDefault ? colors.black : colors.white
    },
    fill: {
      type: "gradient",
      gradient: {
        shade: themeVariantDefault,
        type: "vertical",
        opacityFrom: 1,
        opacityTo: 0,
        stops: [0, 100]
      }
    },
    tooltip: {
      marker: {
        show: false
      },
      y: {
        formatter: val => `${val} Visited` // Format chart tooltip value
      }
    },
    xaxis: {
      categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"],
      crosshairs: {
        show: false
      }
    }
  })

  // Render all chart widgets
  widgetChart6.render()

  // Theme toggle listener
  $("#theme-toggle").on("click", function() {
    // Get theme data
    const isDark = $("html").attr("data-theme") == 'dark'
    const themeVariant = isDark ? "dark" : "light"

    // Update all widget colors
    widgetChart6.updateOptions({
      ...themeOptions[themeVariant],
      markers: { strokeColors: isDark ? colors.black : colors.white },
      fill: {
        gradient: { shade: themeVariant }
      }
    })
  })
})