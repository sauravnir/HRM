<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../CSS/dashboard.css">
    <link rel="icon" type="image/x-icon" href="../assets/logo.png">
</head>

<body>

    <div class="main">
        <div class="leftSidebar">
            <div class="logo-ctn">
                <img src="../assets/logo.png" alt="">
                <h3>Quinate Creations</h3>
            </div>
            <!-- Tabs for sidebar -->
            <div class="tabs">
                <a href="dashboard.php">
                    <div class="tab active"><img src="../assets/dashboard.png" alt="">
                        <h5>Dashboard</h5>
                    </div>
                </a>
                <a href="empreg.php">
                    <div class="tab"><img src="../assets/employeeAdd.png" alt="">
                        <h5>Create Employee</h5>
                    </div>
                </a>
                <a href="details.php">
                    <div class="tab"><img src="../assets/employeedetaiils.png" alt="">
                        <h5>Employee Details</h5>
                    </div>
                </a>
                <a href="leave.php">
                    <div class="tab"><img src="../assets/leave.png" alt="">
                        <h5>Leave Request</h5>
                    </div>
                </a>

                <div class="tab1"><img src="../assets/logout.png" alt="">
                    <button id="logout" onclick="logOut()">Logout</button>
                </div>

            </div>
        </div>
        <div class="main-container">
            <div class="top-bar">
                <!-- Toggle Sidebar -->
                <button id="toggle" class="circle"></button>
                <!-- Account Profile Container -->
                <div class="prf-container">
                    <div class="prf-circle">
                        <img src="../assets/pp.png" alt="" onclick>
                    </div>
                    
                    <h6 class="prf-username">Admin</h6>
                    
                </div>
            </div>

            <!-- Adding carousal in dashboard -->
            <div class="dashboard-content">
                <h1 class="ContentTitle">Dashboard</h1>
                <div class="pictures">
                    <input type="image" onclick="imageClicker()" src="https://image-charts.com/chart.js/2.8.0?bkg=white&icac=documentation&c=ewogICJ0eXBlIjogImJhciIsCiAgImRhdGEiOiB7CiAgICAibGFiZWxzIjogWwogICAgICAiSmFudWFyeSIsCiAgICAgICJGZWJydWFyeSIsCiAgICAgICJNYXJjaCIsCiAgICAgICJBcHJpbCIsCiAgICAgICJNYXkiLAogICAgICAiSnVuZSIsCiAgICAgICJKdWx5IgogICAgXSwKICAgICJkYXRhc2V0cyI6IFsKICAgICAgewogICAgICAgICJsYWJlbCI6ICJEYXRhc2V0IDEiLAogICAgICAgICJiYWNrZ3JvdW5kQ29sb3IiOiAicmdiYSgyNTUsIDk5LCAxMzIsIDAuNSkiLAogICAgICAgICJib3JkZXJDb2xvciI6ICJyZ2IoMjU1LCA5OSwgMTMyKSIsCiAgICAgICAgImJvcmRlcldpZHRoIjogMSwKICAgICAgICAiZGF0YSI6IFsKICAgICAgICAgIC0zMSwKICAgICAgICAgIC03MCwKICAgICAgICAgIC0zMCwKICAgICAgICAgIC0zMywKICAgICAgICAgIC05LAogICAgICAgICAgMTQsCiAgICAgICAgICAtNDEKICAgICAgICBdCiAgICAgIH0sCiAgICAgIHsKICAgICAgICAibGFiZWwiOiAiRGF0YXNldCAyIiwKICAgICAgICAiYmFja2dyb3VuZENvbG9yIjogInJnYmEoNTQsIDE2MiwgMjM1LCAwLjUpIiwKICAgICAgICAiYm9yZGVyQ29sb3IiOiAicmdiKDU0LCAxNjIsIDIzNSkiLAogICAgICAgICJib3JkZXJXaWR0aCI6IDEsCiAgICAgICAgImRhdGEiOiBbCiAgICAgICAgICA3MywKICAgICAgICAgIDQxLAogICAgICAgICAgMjksCiAgICAgICAgICA2MSwKICAgICAgICAgIC02NSwKICAgICAgICAgIDU5LAogICAgICAgICAgMzgKICAgICAgICBdCiAgICAgIH0KICAgIF0KICB9LAogICJvcHRpb25zIjogewogICAgInJlc3BvbnNpdmUiOiB0cnVlLAogICAgImxlZ2VuZCI6IHsKICAgICAgInBvc2l0aW9uIjogInRvcCIKICAgIH0sCiAgICAidGl0bGUiOiB7CiAgICAgICJkaXNwbGF5IjogdHJ1ZSwKICAgICAgInRleHQiOiAiQ2hhcnQuanMgQmFyIENoYXJ0IgogICAgfQogIH0KfQ%3D%3D&encoding=base64&ichm=767e1af094a9d9ac16426d928da84f321b8707923f4c4a33bb7a8377e63e1859"
                        alt="" class="pic">
                    <input type="image" onclick="imageClicker1()" src="https://image-charts.com/chart.js/2.8.0?bkg=white&icac=documentation&c=eyJ0eXBlIjoiYmFyIiwiZGF0YSI6eyJsYWJlbHMiOlsiUmVkIiwiQmx1ZSIsIlllbGxvdyIsIkdyZWVuIiwiUHVycGxlIiwiT3JhbmdlIl0sImRhdGFzZXRzIjpbeyJsYWJlbCI6ImRhdGEgMCIsImRhdGEiOlsxMiwxOSwzLDUsMiwzXSwiYmFja2dyb3VuZENvbG9yIjpbInJnYmEoMjU1LDk5LDEzMiwxKSIsInJnYmEoNTQsIDE2MiwgMjM1LCAxKSIsInJnYmEoMjU1LCAyMDYsIDg2LCAxKSIsInJnYmEoNzUsIDE5MiwgMTkyLCAxKSIsInJnYmEoMTUzLCAxMDIsIDI1NSwgMSkiLCJyZ2JhKDI1NSwgMTU5LCA2NCwgMSkiXSwiYm9yZGVyV2lkdGgiOjB9LHsibGFiZWwiOiJkYXRhIDEiLCJkYXRhIjpbMjAsNSwxMCwxNSwxMiwxM10sImJhY2tncm91bmRDb2xvciI6WyJyZ2JhKDI1NSwgMTU5LCA2NCwgMSkiLCJyZ2JhKDI1NSwgOTksIDEzMiwgMSkiLCJyZ2JhKDI1NSwgMjA2LCA4NiwgMSkiLCJyZ2JhKDU0LCAxNjIsIDIzNSwgMSkiLCJyZ2JhKDE1MywgMTAyLCAyNTUsIDEpIiwicmdiYSg3NSwgMTkyLCAxOTIsIDEpIl0sImJvcmRlcldpZHRoIjowfSx7ImxhYmVsIjoiZGF0YSAyIiwiZGF0YSI6WzIwLDAsMzAsMCwtNSwtMTBdLCJiYWNrZ3JvdW5kQ29sb3IiOlsicmdiYSg3NSwgMTkyLCAxOTIsIDEpIiwicmdiYSgyNTUsIDE1OSwgNjQsIDEpIiwicmdiYSgyNTUsIDk5LCAxMzIsIDEpIiwicmdiYSgyNTUsIDIwNiwgODYsIDEpIiwicmdiYSg1NCwgMTYyLCAyMzUsIDEpIiwicmdiYSgxNTMsIDEwMiwgMjU1LCAxKSJdLCJib3JkZXJXaWR0aCI6MH1dfSwib3B0aW9ucyI6eyJyZWN0YW5nbGVSYWRpdXMiOjEwLCJlbGVtZW50cyI6eyJwb2ludCI6eyJyYWRpdXMiOjI1LCJob3ZlclJhZGl1cyI6MzUsInBvaW50U3R5bGUiOiJyZWN0Um91bmRlZCJ9fSwiY29ybmVyUmFkaXVzIjoxMCwiZnVsbENvcm5lclJhZGl1cyI6ZmFsc2UsInNjYWxlcyI6eyJ5QXhlcyI6W3sidGlja3MiOnsiYmVnaW5BdFplcm8iOnRydWV9LCJzdGFja2VkIjp0cnVlLCJyYWRpdXMiOjI1fV0sInhBeGVzIjpbeyJ0aWNrcyI6eyJiZWdpbkF0WmVybyI6dHJ1ZX0sInN0YWNrZWQiOnRydWV9XX19fQ%3D%3D&encoding=base64&ichm=2422279cef3bb20069a3d61576812e2f6e90219b5504f3f4486c7360f8cf8af5"
                        alt="" class="pic">
                    <input type="image" onclick="imageClicker2()" src="https://image-charts.com/chart?chd=a1%3A%2C103.7%2C7.23%2C31.02%2C82.22%2C-123.74%2C43.71%2C84.22%2C164.59%2C31.26%2C69.91%2C90.59%2C20.9%2C-51.29%2C-44.29%2C-333.83%2C-452.37%2C35.41%2C24.4%7C1500%2C1603%2C1610%2C1641%2C1723%2C1599%2C1642%2C1726%2C1890%2C1921%2C1990%2C2080%2C2100%2C2048%2C2003%2C1669%2C1216%2C1251%2C1275&chg=20%2C50&chlps=textAlign%2Cright%7Calign%2Cbottom%7Cfont.size%2C8&chm=D%2C00AAFF%2C1%2C0%2C5%2C1&chs=800x600&cht=bvs&chxl=0%3A%7C%7C103%7C7%7C31%7C82%7C-124%7C43%7C84%7C164%7C31%7C69%7C90%7C20%7C-52%7C-45%7C-334%7C-453%7C35%7C24&chxr=2%2C-500%2C2500%7C1%2C-500%2C2500%2C100&chxs=1%2C000000%2C0%2C_&chxt=x%2Cy%2Cy&iclocale=en&icretina=1&icac=documentation&ichm=28a6526c93aaec6c3faacd16300534ed4b3ec6c4a8fc1db190756a9abd86f9af"
                        alt="" class="pic">
                    <input type="image" onclick="imageClicker3()" src="https://image-charts.com/chart.js/2.8.0?bkg=white&icac=documentation&c=ewogIHR5cGU6ICdsaW5lJywKICBkYXRhOiB7CiAgICBsYWJlbHM6IFsnSmFudWFyeScsICdGZWJydWFyeScsICdNYXJjaCcsICdBcHJpbCcsICdNYXknLCAnSnVuZScsICdKdWx5J10sCiAgICBkYXRhc2V0czogWwogICAgICB7CiAgICAgICAgbGFiZWw6ICdkYXRhc2V0IC0gYmlnIHBvaW50cycsCiAgICAgICAgZGF0YTogWy0xNSwgLTgwLCA3OSwgLTExLCAtNSwgMzMsIC01N10sCiAgICAgICAgYmFja2dyb3VuZENvbG9yOiAncmdiKDI1NSwgOTksIDEzMiknLAogICAgICAgIGJvcmRlckNvbG9yOiAncmdiKDI1NSwgOTksIDEzMiknLAogICAgICAgIGZpbGw6IGZhbHNlLAogICAgICAgIGJvcmRlckRhc2g6IFs1LCA1XSwKICAgICAgICBwb2ludFJhZGl1czogMTUsCiAgICAgICAgcG9pbnRIb3ZlclJhZGl1czogMTAsCiAgICAgIH0sCiAgICAgIHsKICAgICAgICBsYWJlbDogJ2RhdGFzZXQgLSBpbmRpdmlkdWFsIHBvaW50IHNpemVzJywKICAgICAgICBkYXRhOiBbLTg2LCA1OSwgLTcwLCAtNDAsIDQwLCAzMywgMTZdLAogICAgICAgIGJhY2tncm91bmRDb2xvcjogJ3JnYig1NCwgMTYyLCAyMzUpJywKICAgICAgICBib3JkZXJDb2xvcjogJ3JnYig1NCwgMTYyLCAyMzUpJywKICAgICAgICBmaWxsOiBmYWxzZSwKICAgICAgICBib3JkZXJEYXNoOiBbNSwgNV0sCiAgICAgICAgcG9pbnRSYWRpdXM6IFsyLCA0LCA2LCAxOCwgMCwgMTIsIDIwXSwKICAgICAgfSwKICAgICAgewogICAgICAgIGxhYmVsOiAnZGF0YXNldCAtIGxhcmdlIHBvaW50SG92ZXJSYWRpdXMnLAogICAgICAgIGRhdGE6IFs1OSwgLTY1LCAtMzMsIDAsIC03OSwgOTUsIC01M10sCiAgICAgICAgYmFja2dyb3VuZENvbG9yOiAncmdiKDc1LCAxOTIsIDE5MiknLAogICAgICAgIGJvcmRlckNvbG9yOiAncmdiKDc1LCAxOTIsIDE5MiknLAogICAgICAgIGZpbGw6IGZhbHNlLAogICAgICAgIHBvaW50SG92ZXJSYWRpdXM6IDMwLAogICAgICB9LAogICAgICB7CiAgICAgICAgbGFiZWw6ICdkYXRhc2V0IC0gbGFyZ2UgcG9pbnRIaXRSYWRpdXMnLAogICAgICAgIGRhdGE6IFs3MywgODMsIC0xOSwgNzQsIDE2LCAtMTIsIDhdLAogICAgICAgIGJhY2tncm91bmRDb2xvcjogJ3JnYigyNTUsIDIwNSwgODYpJywKICAgICAgICBib3JkZXJDb2xvcjogJ3JnYigyNTUsIDIwNSwgODYpJywKICAgICAgICBmaWxsOiBmYWxzZSwKICAgICAgICBwb2ludEhpdFJhZGl1czogMjAsCiAgICAgIH0sCiAgICBdLAogIH0sCiAgb3B0aW9uczogewogICAgbGVnZW5kOiB7CiAgICAgIHBvc2l0aW9uOiAnYm90dG9tJywKICAgIH0sCiAgICB0aXRsZTogewogICAgICBkaXNwbGF5OiB0cnVlLAogICAgICB0ZXh0OiAnQ2hhcnQuanMgTGluZSBDaGFydCAtIERpZmZlcmVudCBwb2ludCBzaXplcycsCiAgICB9LAogIH0sCn0K&encoding=base64&ichm=9041bf0051dc7b81bc04dea555e860f6e13bfe22b8aa08cb440ec05eb43dea00"
                        alt="" class="pic"> 
                </div>

            </div>
        </div>

    </div>
    <script src="../JS/dashboard.js"></script>
    <script src="../JS/nav-bar.js"></script>
</body>

</html>
