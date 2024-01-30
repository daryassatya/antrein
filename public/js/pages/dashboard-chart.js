$(function() {
    "use strict";
    
        var basicpieChart = echarts.init(document.getElementById('basic-pie'));
        var option = {
            // Add title
                // title: {
                //     text: 'A site user access source',
                //     subtext: 'Purely Fictitious',
                //     x: 'center'
                // },

                // Add tooltip
                tooltip: {
                    trigger: 'item',
                    formatter: "{a} <br/>{b}: {c} ({d}%)"
                },

                // Add legend
                // legend: {
                //     orient: 'vertical',
                //     x: 'left',
                //     data: ['Direct Access', 'Mail Marketing', 'Union ad', 'Video ad', 'Search Engine']
                // },

                // Add custom colors
                color: ['#689f38', '#38649f', '#389f99', '#ee1044', '#ff8f00'],

                // Display toolbox
                // toolbox: {
                //     show: true,
                //     orient: 'vertical',
                //     feature: {
                //         mark: {
                //             show: true,
                //             title: {
                //                 mark: 'Markline switch',
                //                 markUndo: 'Undo markline',
                //                 markClear: 'Clear markline'
                //             }
                //         },
                //         dataView: {
                //             show: true,
                //             readOnly: false,
                //             title: 'View data',
                //             lang: ['View chart data', 'Close', 'Update']
                //         },
                //         magicType: {
                //             show: true,
                //             title: {
                //                 pie: 'Switch to pies',
                //                 funnel: 'Switch to funnel',
                //             },
                //             type: ['pie', 'funnel'],
                //             option: {
                //                 funnel: {
                //                     x: '25%',
                //                     y: '20%',
                //                     width: '50%',
                //                     height: '70%',
                //                     funnelAlign: 'left',
                //                     max: 1548
                //                 }
                //             }
                //         },
                //         restore: {
                //             show: true,
                //             title: 'Restore'
                //         },
                //         saveAsImage: {
                //             show: true,
                //             title: 'Same as image',
                //             lang: ['Save']
                //         }
                //     }
                // },

                // Enable drag recalculate
                calculable: true,

                // Add series
                series: [{
                    name: 'Category',
                    type: 'pie',
                    radius: '70%',
                    center: ['50%', '57.5%'],
                    // data: [
                    //     {value: 106, name: 'PRALINE NUTS'},
                    //     {value: 1079, name: 'SHINY COLOR'},
                    //     {value: 872, name: 'SHINY COLOR B2B'},
                    //     {value: 183, name: ' '},
                    //     {value: 109, name: 'AROMAGEL'},
                    //     {value: 667, name: 'CHOCOLATE BLISTER'},
                    //     {value: 1236, name: 'CHOCOLATE FINISH PRODUCT'},
                    //     {value: 371, name: 'CHOCOLATE TRANSFER SHEET'},
                    //     {value: 1113, name: 'COCOA BUTTER'},
                    //     {value: 67, name: 'COLOR GEL'},
                    //     {value: 969, name: 'COLORING FAT-SOLUBLE'},
                    //     {value: 556, name: 'COLORING FAT-SOLUBLE B2B'},
                    //     {value: 155, name: 'COLORING WATER-SOLUBLE'},
                    //     {value: 108, name: 'COLORING WATER-SOLUBLE B2B'},
                    //     {value: 298, name: 'GLAZE'},
                    //     {value: 222, name: 'NUT PASTE'},
                    // ]
                    data: pieChartQty
                }]
        };
    
        basicpieChart.setOption(option);
        
        var basicpieChart = echarts.init(document.getElementById('basic-pie2'));
        var option = {
            // Add title
                // title: {
                //     text: 'A site user access source',
                //     subtext: 'Purely Fictitious',
                //     x: 'center'
                // },

                // Add tooltip
                tooltip: {
                    trigger: 'item',
                    formatter: "{a} <br/>{b}: {c} ({d}%)"
                },

                // Add legend
                // legend: {
                //     orient: 'vertical',
                //     x: 'left',
                //     data: ['Direct Access', 'Mail Marketing', 'Union ad', 'Video ad', 'Search Engine']
                // },

                // Add custom colors
                color: ['#689f38', '#38649f', '#389f99', '#ee1044', '#ff8f00'],

                // Display toolbox
                // toolbox: {
                //     show: true,
                //     orient: 'vertical',
                //     feature: {
                //         mark: {
                //             show: true,
                //             title: {
                //                 mark: 'Markline switch',
                //                 markUndo: 'Undo markline',
                //                 markClear: 'Clear markline'
                //             }
                //         },
                //         dataView: {
                //             show: true,
                //             readOnly: false,
                //             title: 'View data',
                //             lang: ['View chart data', 'Close', 'Update']
                //         },
                //         magicType: {
                //             show: true,
                //             title: {
                //                 pie: 'Switch to pies',
                //                 funnel: 'Switch to funnel',
                //             },
                //             type: ['pie', 'funnel'],
                //             option: {
                //                 funnel: {
                //                     x: '25%',
                //                     y: '20%',
                //                     width: '50%',
                //                     height: '70%',
                //                     funnelAlign: 'left',
                //                     max: 1548
                //                 }
                //             }
                //         },
                //         restore: {
                //             show: true,
                //             title: 'Restore'
                //         },
                //         saveAsImage: {
                //             show: true,
                //             title: 'Same as image',
                //             lang: ['Save']
                //         }
                //     }
                // },

                // Enable drag recalculate
                calculable: true,

                // Add series
                series: [{
                    name: 'Category',
                    type: 'pie',
                    radius: '70%',
                    center: ['50%', '57.5%'],
                    // data: [
                    //     {value: 106, name: 'PRALINE NUTS'},
                    //     {value: 1079, name: 'SHINY COLOR'},
                    //     {value: 872, name: 'SHINY COLOR B2B'},
                    //     {value: 183, name: ' '},
                    //     {value: 109, name: 'AROMAGEL'},
                    //     {value: 667, name: 'CHOCOLATE BLISTER'},
                    //     {value: 1236, name: 'CHOCOLATE FINISH PRODUCT'},
                    //     {value: 371, name: 'CHOCOLATE TRANSFER SHEET'},
                    //     {value: 1113, name: 'COCOA BUTTER'},
                    //     {value: 67, name: 'COLOR GEL'},
                    //     {value: 969, name: 'COLORING FAT-SOLUBLE'},
                    //     {value: 556, name: 'COLORING FAT-SOLUBLE B2B'},
                    //     {value: 155, name: 'COLORING WATER-SOLUBLE'},
                    //     {value: 108, name: 'COLORING WATER-SOLUBLE B2B'},
                    //     {value: 298, name: 'GLAZE'},
                    //     {value: 222, name: 'NUT PASTE'},
                    // ]
                    data: pieChartAmmount
                }]
        };
    
        basicpieChart.setOption(option);
        
        
        $(function () {

                // Resize chart on menu width change and window resize
                $(window).on('resize', resize);
                $(".sidebartoggler").on('click', resize);

                // Resize function
                function resize() {
                    setTimeout(function() {

                        // Resize chart
                        basicpieChart.resize();
                        basicdoughnutChart.resize();
                        customizedChart.resize();
                        nestedChart.resize();
                        poleChart.resize();
                    }, 200);
                }
            });
});