<?php include"assest/common/doctype.php" ?>
<?php include"assest/common/all-links.php" ?>

<style>
    .ic-mark-div {
        margin: 0 auto;
        display: table;
        float: none;
    }

    .ic-sem1 {
        float: left;
        width: 100%;
    }

    .ic-nopad {
        padding: 0;
        text-align: center;
    }

    .mark-input {
        width: 100%;
        height: 38px;
        text-align: center;
        border: 1px solid #999;
        border-bottom: none;
        border-right: none;
    }

    .mark-input:focus {
        border: none !important;
        box-shadow: none !important;
    }

    .mark-border {
        padding: 10px 0;
        border: 1px solid #999;
        font-weight: 600;
        letter-spacing: .6px;

    }

    .ic-nomar {
        margin: 0;
        font-size: 14px;
        text-transform: capitalize;
        letter-spacing: .6px;
        font-weight: 600;
    }

    .mark-border1 {
        padding: 4px 0;
        border: 1px solid #999;
        border-bottom: none;
        border-left: none;
        border-right: none;
    }

    .mark-border3 {
        padding: 19px 0px;
        border-left: 1px solid #999;
        border-right: 1px solid #999;
        line-height: 19px;
    }

    .rg-border {
        border-right: 1px solid #999;
    }

    .last-border {
        border-bottom: 1px solid #999;

    }

    .ic1-head {
        font-size: 22px;
        letter-spacing: .5px;
        font-weight: 600;
        margin-bottom: 30px;
        padding: 0 15px;
    }

    .mark-table {
        /*        margin: 40px 0*/
    }

</style>
</head>

<body>

    <section class="ic-mark">
        <div class="container">
            <div class="ic-fulldiv">
                <h1 class="ic-h1 text-center">Student Mark Details</h1>
                <br>
                <br>
                <div class="col-lg-12 ic-mark-div">
                    <h2 class="ic1-head">Past Academic Record</h2>
                    <div class="col-lg-12 mark-table">
                        <div class="ic-sem1">
                            <div class="col-lg-1 ic-nopad">
                                <div class="col-lg-12 ic-nopad mark-border3" style="border-right:none;border-top:1px solid #999;">
                                    <p class="text-center ic-nomar">SL.No</p>
                                </div>
                                <input type="text" class="mark-input">
                                <input type="text" class="mark-input">
                                <input type="text" class="mark-input">
                                <input type="text" class="mark-input">
                                <input type="text" class="mark-input last-border">
                            </div>
                            <div class="col-lg-2 ic-nopad">
                                <div class="col-lg-12 ic-nopad mark-border3" style="border-right:none;border-top:1px solid #999;">
                                    <p class="text-center ic-nomar">Class</p>
                                </div>
                                <input type="text" class="mark-input">
                                <input type="text" class="mark-input">
                                <input type="text" class="mark-input">
                                <input type="text" class="mark-input">
                                <input type="text" class="mark-input last-border">
                            </div>
                            <div class="col-lg-5 ic-nopad">
                                <div class="col-lg-12 ic-nopad mark-border3" style="border-top:1px solid #999;">
                                    <p class="text-center ic-nomar">Institution</p>
                                </div>
                                <input type="text" class="mark-input">
                                <input type="text" class="mark-input">
                                <input type="text" class="mark-input">
                                <input type="text" class="mark-input">
                                <input type="text" class="mark-input last-border">
                            </div>
                            <div class="col-lg-4 ic-nopad">
                                <div class="col-lg-6 ic-nopad ">
                                    <div class="col-lg-12 ic-nopad mark-border1" style="">
                                        <p class="text-center ic-nomar">Marks</p>
                                    </div>
                                    <div class="col-lg-6 ic-nopad">
                                        <div class="col-lg-12 ic-nopad mark-border1">
                                            <p class="text-center ic-nomar">Secured</p>
                                        </div>
                                        <input type="text" class="mark-input">
                                        <input type="text" class="mark-input">
                                        <input type="text" class="mark-input">
                                        <input type="text" class="mark-input">
                                        <input type="text" class="mark-input last-border">
                                    </div>
                                    <div class="col-lg-6 ic-nopad">
                                        <div class="col-lg-12 ic-nopad mark-border1" style="border-left:1px solid #999;">
                                            <p class="text-center ic-nomar">Maximun</p>
                                        </div>
                                        <input type="text" class="mark-input">
                                        <input type="text" class="mark-input">
                                        <input type="text" class="mark-input">
                                        <input type="text" class="mark-input">
                                        <input type="text" class="mark-input last-border">
                                    </div>
                                </div>

                                <div class="col-lg-6 ic-nopad ">
                                    <div class="col-lg-12 ic-nopad mark-border1" style="border-right:1px solid #999;border-left:1px solid #999;">
                                        <p class="text-center ic-nomar">Results</p>
                                    </div>
                                    <div class="col-lg-6 ic-nopad">
                                        <div class="col-lg-12 ic-nopad mark-border1" style="border-left:1px solid #999;">
                                            <p class="text-center ic-nomar">%</p>
                                        </div>
                                        <input type="text" class="mark-input">
                                        <input type="text" class="mark-input">
                                        <input type="text" class="mark-input">
                                        <input type="text" class="mark-input">
                                        <input type="text" class="mark-input last-border">
                                    </div>
                                    <div class="col-lg-6 ic-nopad">
                                        <div class="col-lg-12 ic-nopad mark-border1" style="border-left:1px solid #999;border-right:1px solid #999;">
                                            <p class="text-center ic-nomar">Grade</p>
                                        </div>
                                        <input type="text" class="mark-input rg-border">
                                        <input type="text" class="mark-input rg-border">
                                        <input type="text" class="mark-input rg-border">
                                        <input type="text" class="mark-input rg-border">
                                        <input type="text" class="mark-input rg-border last-border">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>



                <!--       accordion section start         -->


                <div class="naccs col-lg-12">
                      <h2 class="ic1-head">Academic Record</h2>
                    <div class="grid">
                        <div class="gc gc--1-of-3">
                            <div class="menu">
                                <div class="active"><span class="light"></span><span>First Semester</span></div>
                                <div><span class="light"></span><span>Second Semester</span></div>
                                <div><span class="light"></span><span>Third Semester</span></div>
                            </div>
                        </div>
                        <div class="gc gc--2-of-3">
                            <ul class="nacc">
                                <li class="active">
                                    <div>
                                        <div class="col-lg-12 mark-table">
                                           
                                            <div class="ic-sem1">
                                                <div class="col-lg-12 text-center mark-border">First Semester</div>
                                                <div class="col-lg-5 ic-nopad">
                                                    <div class="col-lg-12 ic-nopad mark-border3">
                                                        <p class="text-center ic-nomar">subject</p>
                                                    </div>
                                                    <input type="text" class="mark-input">
                                                    <input type="text" class="mark-input">
                                                    <input type="text" class="mark-input">
                                                    <input type="text" class="mark-input">
                                                    <input type="text" class="mark-input">
                                                    <input type="text" class="mark-input">
                                                    <input type="text" class="mark-input">
                                                    <input type="text" class="mark-input">
                                                    <input type="text" class="mark-input">
                                                    <input type="text" class="mark-input last-border">
                                                </div>
                                                <div class="col-lg-7 ic-nopad">
                                                    <div class="col-lg-8 ic-nopad ">
                                                        <div class="col-lg-12 ic-nopad mark-border1" style="border-top:none;">
                                                            <p class="text-center ic-nomar">Marks</p>
                                                        </div>
                                                        <div class="col-lg-6 ic-nopad">
                                                            <div class="col-lg-12 ic-nopad mark-border1">
                                                                <p class="text-center ic-nomar">internals</p>
                                                            </div>
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input last-border">
                                                        </div>
                                                        <div class="col-lg-6 ic-nopad">
                                                            <div class="col-lg-12 ic-nopad mark-border1" style="border-left:1px solid #999;">
                                                                <p class="text-center ic-nomar">Externals</p>
                                                            </div>
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input last-border">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 ic-nopad">
                                                        <div class="col-lg-12 ic-nopad mark-border3">
                                                            <p class="text-center ic-nomar">Totals</p>
                                                        </div>
                                                        <input type="text" class="mark-input rg-border">
                                                        <input type="text" class="mark-input rg-border">
                                                        <input type="text" class="mark-input rg-border">
                                                        <input type="text" class="mark-input rg-border">
                                                        <input type="text" class="mark-input rg-border">
                                                        <input type="text" class="mark-input rg-border">
                                                        <input type="text" class="mark-input rg-border">
                                                        <input type="text" class="mark-input rg-border">
                                                        <input type="text" class="mark-input rg-border">
                                                        <input type="text" class="mark-input rg-border last-border">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <div class="col-lg-12 mark-table">
                                            <div class="ic-sem1">
                                                <div class="col-lg-12 text-center mark-border">Second Semester</div>
                                                <div class="col-lg-5 ic-nopad">
                                                    <div class="col-lg-12 ic-nopad mark-border3">
                                                        <p class="text-center ic-nomar">subject</p>
                                                    </div>
                                                    <input type="text" class="mark-input">
                                                    <input type="text" class="mark-input">
                                                    <input type="text" class="mark-input">
                                                    <input type="text" class="mark-input">
                                                    <input type="text" class="mark-input">
                                                    <input type="text" class="mark-input">
                                                    <input type="text" class="mark-input">
                                                    <input type="text" class="mark-input">
                                                    <input type="text" class="mark-input">
                                                    <input type="text" class="mark-input last-border">
                                                </div>
                                                <div class="col-lg-7 ic-nopad">
                                                    <div class="col-lg-8 ic-nopad ">
                                                        <div class="col-lg-12 ic-nopad mark-border1" style="border-top:none;">
                                                            <p class="text-center ic-nomar">Marks</p>
                                                        </div>
                                                        <div class="col-lg-6 ic-nopad">
                                                            <div class="col-lg-12 ic-nopad mark-border1">
                                                                <p class="text-center ic-nomar">internals</p>
                                                            </div>
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input last-border">
                                                        </div>
                                                        <div class="col-lg-6 ic-nopad">
                                                            <div class="col-lg-12 ic-nopad mark-border1" style="border-left:1px solid #999;">
                                                                <p class="text-center ic-nomar">Externals</p>
                                                            </div>
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input last-border">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 ic-nopad">
                                                        <div class="col-lg-12 ic-nopad mark-border3">
                                                            <p class="text-center ic-nomar">Totals</p>
                                                        </div>
                                                        <input type="text" class="mark-input rg-border">
                                                        <input type="text" class="mark-input rg-border">
                                                        <input type="text" class="mark-input rg-border">
                                                        <input type="text" class="mark-input rg-border">
                                                        <input type="text" class="mark-input rg-border">
                                                        <input type="text" class="mark-input rg-border">
                                                        <input type="text" class="mark-input rg-border">
                                                        <input type="text" class="mark-input rg-border">
                                                        <input type="text" class="mark-input rg-border">
                                                        <input type="text" class="mark-input rg-border last-border">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <div class="col-lg-12 mark-table">
                                            <div class="ic-sem1">
                                                <div class="col-lg-12 text-center mark-border">Third Semester</div>
                                                <div class="col-lg-5 ic-nopad">
                                                    <div class="col-lg-12 ic-nopad mark-border3">
                                                        <p class="text-center ic-nomar">subject</p>
                                                    </div>
                                                    <input type="text" class="mark-input">
                                                    <input type="text" class="mark-input">
                                                    <input type="text" class="mark-input">
                                                    <input type="text" class="mark-input">
                                                    <input type="text" class="mark-input">
                                                    <input type="text" class="mark-input">
                                                    <input type="text" class="mark-input">
                                                    <input type="text" class="mark-input">
                                                    <input type="text" class="mark-input">
                                                    <input type="text" class="mark-input last-border">
                                                </div>
                                                <div class="col-lg-7 ic-nopad">
                                                    <div class="col-lg-8 ic-nopad ">
                                                        <div class="col-lg-12 ic-nopad mark-border1" style="border-top:none;">
                                                            <p class="text-center ic-nomar">Marks</p>
                                                        </div>
                                                        <div class="col-lg-6 ic-nopad">
                                                            <div class="col-lg-12 ic-nopad mark-border1">
                                                                <p class="text-center ic-nomar">internals</p>
                                                            </div>
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input last-border">
                                                        </div>
                                                        <div class="col-lg-6 ic-nopad">
                                                            <div class="col-lg-12 ic-nopad mark-border1" style="border-left:1px solid #999;">
                                                                <p class="text-center ic-nomar">Externals</p>
                                                            </div>
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input">
                                                            <input type="text" class="mark-input last-border">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 ic-nopad">
                                                        <div class="col-lg-12 ic-nopad mark-border3">
                                                            <p class="text-center ic-nomar">Totals</p>
                                                        </div>
                                                        <input type="text" class="mark-input rg-border">
                                                        <input type="text" class="mark-input rg-border">
                                                        <input type="text" class="mark-input rg-border">
                                                        <input type="text" class="mark-input rg-border">
                                                        <input type="text" class="mark-input rg-border">
                                                        <input type="text" class="mark-input rg-border">
                                                        <input type="text" class="mark-input rg-border">
                                                        <input type="text" class="mark-input rg-border">
                                                        <input type="text" class="mark-input rg-border">
                                                        <input type="text" class="mark-input rg-border last-border">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--       accordion section end         -->


            </div>
        </div>
    </section>



    <script>
        // Acc
        $(document).on("click", ".naccs .menu div", function() {
            var numberIndex = $(this).index();

            if (!$(this).is("active")) {
                $(".naccs .menu div").removeClass("active");
                $(".naccs ul li").removeClass("active");

                $(this).addClass("active");
                $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

                var listItemHeight = $(".naccs ul")
                    .find("li:eq(" + numberIndex + ")")
                    .innerHeight();
                $(".naccs ul").height(listItemHeight + "px");
            }
        });

    </script>




    <script src="assest/js/common.js"></script>
</body>

</html>
