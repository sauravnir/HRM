//for dashboard navigation
let clicked = false
document.getElementById("toggle").addEventListener("click", function () {
    if (clicked == false) {
        document.getElementsByClassName("leftSidebar")[0].style.width = "0"
        document.getElementsByClassName("leftSidebar")[0].style.display = "none"
        document.getElementsByClassName("main-container")[0].style.width = "100%"
        clicked = true
    } else if (clicked == true) {

        document.getElementsByClassName("leftSidebar")[0].style.width = "300px"
        document.getElementsByClassName("leftSidebar")[0].style.display = "block"
        document.getElementsByClassName("main-container")[0].style.width = "calc(100% - 300px)"

        clicked = false
    }
})

// for the dropdown of employee dashboard 
let dropdownActive = true
document.getElementById("dropdown-btn").addEventListener("click", function () {
    if (dropdownActive == false) {
        document.getElementsByClassName("dropdown-wrapper")[0].style.display = "none"
        dropdownActive = true
    } else if (dropdownActive == true) {
        document.getElementsByClassName("dropdown-wrapper")[0].style.display = "block"
        dropdownActive = false
    }
})


//for image 
function imageClicker() {
    Swal.fire({
        imageUrl: 'https://image-charts.com/chart.js/2.8.0?bkg=white&icac=documentation&c=ewogICJ0eXBlIjogImJhciIsCiAgImRhdGEiOiB7CiAgICAibGFiZWxzIjogWwogICAgICAiSmFudWFyeSIsCiAgICAgICJGZWJydWFyeSIsCiAgICAgICJNYXJjaCIsCiAgICAgICJBcHJpbCIsCiAgICAgICJNYXkiLAogICAgICAiSnVuZSIsCiAgICAgICJKdWx5IgogICAgXSwKICAgICJkYXRhc2V0cyI6IFsKICAgICAgewogICAgICAgICJsYWJlbCI6ICJEYXRhc2V0IDEiLAogICAgICAgICJiYWNrZ3JvdW5kQ29sb3IiOiAicmdiYSgyNTUsIDk5LCAxMzIsIDAuNSkiLAogICAgICAgICJib3JkZXJDb2xvciI6ICJyZ2IoMjU1LCA5OSwgMTMyKSIsCiAgICAgICAgImJvcmRlcldpZHRoIjogMSwKICAgICAgICAiZGF0YSI6IFsKICAgICAgICAgIC0zMSwKICAgICAgICAgIC03MCwKICAgICAgICAgIC0zMCwKICAgICAgICAgIC0zMywKICAgICAgICAgIC05LAogICAgICAgICAgMTQsCiAgICAgICAgICAtNDEKICAgICAgICBdCiAgICAgIH0sCiAgICAgIHsKICAgICAgICAibGFiZWwiOiAiRGF0YXNldCAyIiwKICAgICAgICAiYmFja2dyb3VuZENvbG9yIjogInJnYmEoNTQsIDE2MiwgMjM1LCAwLjUpIiwKICAgICAgICAiYm9yZGVyQ29sb3IiOiAicmdiKDU0LCAxNjIsIDIzNSkiLAogICAgICAgICJib3JkZXJXaWR0aCI6IDEsCiAgICAgICAgImRhdGEiOiBbCiAgICAgICAgICA3MywKICAgICAgICAgIDQxLAogICAgICAgICAgMjksCiAgICAgICAgICA2MSwKICAgICAgICAgIC02NSwKICAgICAgICAgIDU5LAogICAgICAgICAgMzgKICAgICAgICBdCiAgICAgIH0KICAgIF0KICB9LAogICJvcHRpb25zIjogewogICAgInJlc3BvbnNpdmUiOiB0cnVlLAogICAgImxlZ2VuZCI6IHsKICAgICAgInBvc2l0aW9uIjogInRvcCIKICAgIH0sCiAgICAidGl0bGUiOiB7CiAgICAgICJkaXNwbGF5IjogdHJ1ZSwKICAgICAgInRleHQiOiAiQ2hhcnQuanMgQmFyIENoYXJ0IgogICAgfQogIH0KfQ%3D%3D&encoding=base64&ichm=767e1af094a9d9ac16426d928da84f321b8707923f4c4a33bb7a8377e63e1859',
        imageHeight: 500,
        imageWidth: 2000,
        imageAlt: 'A tall image'
    })
}


function imageClicker1() {
    Swal.fire({
        imageUrl: "https://image-charts.com/chart.js/2.8.0?bkg=white&icac=documentation&c=eyJ0eXBlIjoiYmFyIiwiZGF0YSI6eyJsYWJlbHMiOlsiUmVkIiwiQmx1ZSIsIlllbGxvdyIsIkdyZWVuIiwiUHVycGxlIiwiT3JhbmdlIl0sImRhdGFzZXRzIjpbeyJsYWJlbCI6ImRhdGEgMCIsImRhdGEiOlsxMiwxOSwzLDUsMiwzXSwiYmFja2dyb3VuZENvbG9yIjpbInJnYmEoMjU1LDk5LDEzMiwxKSIsInJnYmEoNTQsIDE2MiwgMjM1LCAxKSIsInJnYmEoMjU1LCAyMDYsIDg2LCAxKSIsInJnYmEoNzUsIDE5MiwgMTkyLCAxKSIsInJnYmEoMTUzLCAxMDIsIDI1NSwgMSkiLCJyZ2JhKDI1NSwgMTU5LCA2NCwgMSkiXSwiYm9yZGVyV2lkdGgiOjB9LHsibGFiZWwiOiJkYXRhIDEiLCJkYXRhIjpbMjAsNSwxMCwxNSwxMiwxM10sImJhY2tncm91bmRDb2xvciI6WyJyZ2JhKDI1NSwgMTU5LCA2NCwgMSkiLCJyZ2JhKDI1NSwgOTksIDEzMiwgMSkiLCJyZ2JhKDI1NSwgMjA2LCA4NiwgMSkiLCJyZ2JhKDU0LCAxNjIsIDIzNSwgMSkiLCJyZ2JhKDE1MywgMTAyLCAyNTUsIDEpIiwicmdiYSg3NSwgMTkyLCAxOTIsIDEpIl0sImJvcmRlcldpZHRoIjowfSx7ImxhYmVsIjoiZGF0YSAyIiwiZGF0YSI6WzIwLDAsMzAsMCwtNSwtMTBdLCJiYWNrZ3JvdW5kQ29sb3IiOlsicmdiYSg3NSwgMTkyLCAxOTIsIDEpIiwicmdiYSgyNTUsIDE1OSwgNjQsIDEpIiwicmdiYSgyNTUsIDk5LCAxMzIsIDEpIiwicmdiYSgyNTUsIDIwNiwgODYsIDEpIiwicmdiYSg1NCwgMTYyLCAyMzUsIDEpIiwicmdiYSgxNTMsIDEwMiwgMjU1LCAxKSJdLCJib3JkZXJXaWR0aCI6MH1dfSwib3B0aW9ucyI6eyJyZWN0YW5nbGVSYWRpdXMiOjEwLCJlbGVtZW50cyI6eyJwb2ludCI6eyJyYWRpdXMiOjI1LCJob3ZlclJhZGl1cyI6MzUsInBvaW50U3R5bGUiOiJyZWN0Um91bmRlZCJ9fSwiY29ybmVyUmFkaXVzIjoxMCwiZnVsbENvcm5lclJhZGl1cyI6ZmFsc2UsInNjYWxlcyI6eyJ5QXhlcyI6W3sidGlja3MiOnsiYmVnaW5BdFplcm8iOnRydWV9LCJzdGFja2VkIjp0cnVlLCJyYWRpdXMiOjI1fV0sInhBeGVzIjpbeyJ0aWNrcyI6eyJiZWdpbkF0WmVybyI6dHJ1ZX0sInN0YWNrZWQiOnRydWV9XX19fQ%3D%3D&encoding=base64&ichm=2422279cef3bb20069a3d61576812e2f6e90219b5504f3f4486c7360f8cf8af5",
        imageHeight: 500,
        imageWidth: 2000,
        imageAlt: 'A tall image'
    })
}


function imageClicker2() {
    Swal.fire({
        imageUrl: 'https://image-charts.com/chart?chd=a1%3A%2C103.7%2C7.23%2C31.02%2C82.22%2C-123.74%2C43.71%2C84.22%2C164.59%2C31.26%2C69.91%2C90.59%2C20.9%2C-51.29%2C-44.29%2C-333.83%2C-452.37%2C35.41%2C24.4%7C1500%2C1603%2C1610%2C1641%2C1723%2C1599%2C1642%2C1726%2C1890%2C1921%2C1990%2C2080%2C2100%2C2048%2C2003%2C1669%2C1216%2C1251%2C1275&chg=20%2C50&chlps=textAlign%2Cright%7Calign%2Cbottom%7Cfont.size%2C8&chm=D%2C00AAFF%2C1%2C0%2C5%2C1&chs=800x600&cht=bvs&chxl=0%3A%7C%7C103%7C7%7C31%7C82%7C-124%7C43%7C84%7C164%7C31%7C69%7C90%7C20%7C-52%7C-45%7C-334%7C-453%7C35%7C24&chxr=2%2C-500%2C2500%7C1%2C-500%2C2500%2C100&chxs=1%2C000000%2C0%2C_&chxt=x%2Cy%2Cy&iclocale=en&icretina=1&icac=documentation&ichm=28a6526c93aaec6c3faacd16300534ed4b3ec6c4a8fc1db190756a9abd86f9af',
        imageHeight: 500,
        imageWidth: 2000,
        imageAlt: 'A tall image'
    })
}

function imageClicker3() {
    Swal.fire({
        imageUrl: 'https://image-charts.com/chart.js/2.8.0?bkg=white&icac=documentation&c=ewogIHR5cGU6ICdsaW5lJywKICBkYXRhOiB7CiAgICBsYWJlbHM6IFsnSmFudWFyeScsICdGZWJydWFyeScsICdNYXJjaCcsICdBcHJpbCcsICdNYXknLCAnSnVuZScsICdKdWx5J10sCiAgICBkYXRhc2V0czogWwogICAgICB7CiAgICAgICAgbGFiZWw6ICdkYXRhc2V0IC0gYmlnIHBvaW50cycsCiAgICAgICAgZGF0YTogWy0xNSwgLTgwLCA3OSwgLTExLCAtNSwgMzMsIC01N10sCiAgICAgICAgYmFja2dyb3VuZENvbG9yOiAncmdiKDI1NSwgOTksIDEzMiknLAogICAgICAgIGJvcmRlckNvbG9yOiAncmdiKDI1NSwgOTksIDEzMiknLAogICAgICAgIGZpbGw6IGZhbHNlLAogICAgICAgIGJvcmRlckRhc2g6IFs1LCA1XSwKICAgICAgICBwb2ludFJhZGl1czogMTUsCiAgICAgICAgcG9pbnRIb3ZlclJhZGl1czogMTAsCiAgICAgIH0sCiAgICAgIHsKICAgICAgICBsYWJlbDogJ2RhdGFzZXQgLSBpbmRpdmlkdWFsIHBvaW50IHNpemVzJywKICAgICAgICBkYXRhOiBbLTg2LCA1OSwgLTcwLCAtNDAsIDQwLCAzMywgMTZdLAogICAgICAgIGJhY2tncm91bmRDb2xvcjogJ3JnYig1NCwgMTYyLCAyMzUpJywKICAgICAgICBib3JkZXJDb2xvcjogJ3JnYig1NCwgMTYyLCAyMzUpJywKICAgICAgICBmaWxsOiBmYWxzZSwKICAgICAgICBib3JkZXJEYXNoOiBbNSwgNV0sCiAgICAgICAgcG9pbnRSYWRpdXM6IFsyLCA0LCA2LCAxOCwgMCwgMTIsIDIwXSwKICAgICAgfSwKICAgICAgewogICAgICAgIGxhYmVsOiAnZGF0YXNldCAtIGxhcmdlIHBvaW50SG92ZXJSYWRpdXMnLAogICAgICAgIGRhdGE6IFs1OSwgLTY1LCAtMzMsIDAsIC03OSwgOTUsIC01M10sCiAgICAgICAgYmFja2dyb3VuZENvbG9yOiAncmdiKDc1LCAxOTIsIDE5MiknLAogICAgICAgIGJvcmRlckNvbG9yOiAncmdiKDc1LCAxOTIsIDE5MiknLAogICAgICAgIGZpbGw6IGZhbHNlLAogICAgICAgIHBvaW50SG92ZXJSYWRpdXM6IDMwLAogICAgICB9LAogICAgICB7CiAgICAgICAgbGFiZWw6ICdkYXRhc2V0IC0gbGFyZ2UgcG9pbnRIaXRSYWRpdXMnLAogICAgICAgIGRhdGE6IFs3MywgODMsIC0xOSwgNzQsIDE2LCAtMTIsIDhdLAogICAgICAgIGJhY2tncm91bmRDb2xvcjogJ3JnYigyNTUsIDIwNSwgODYpJywKICAgICAgICBib3JkZXJDb2xvcjogJ3JnYigyNTUsIDIwNSwgODYpJywKICAgICAgICBmaWxsOiBmYWxzZSwKICAgICAgICBwb2ludEhpdFJhZGl1czogMjAsCiAgICAgIH0sCiAgICBdLAogIH0sCiAgb3B0aW9uczogewogICAgbGVnZW5kOiB7CiAgICAgIHBvc2l0aW9uOiAnYm90dG9tJywKICAgIH0sCiAgICB0aXRsZTogewogICAgICBkaXNwbGF5OiB0cnVlLAogICAgICB0ZXh0OiAnQ2hhcnQuanMgTGluZSBDaGFydCAtIERpZmZlcmVudCBwb2ludCBzaXplcycsCiAgICB9LAogIH0sCn0K&encoding=base64&ichm=9041bf0051dc7b81bc04dea555e860f6e13bfe22b8aa08cb440ec05eb43dea00',
        imageHeight: 500,
        imageWidth: 2000,
        imageAlt: 'A tall image'
    })
}


//Image clicker for employee page

function Clicker() {
    Swal.fire({
        imageUrl: 'https://image-charts.com/chart?chbr=20&chco=CFECF7%2C27c9c2&chd=a%3A10000%2C50000%2C60000%2C80000%2C40000%7C50000%2C60000%2C100000%2C40000%2C20000&chdl=N%7CN-1&chdlp=r&chl=10%7C50%7C60%7C80%7C40%7C50%7C60%7C100%7C40%7C20&chs=700x450&cht=bvs&chtt=Revenue%20per%20month&chxl=0%3A%7CJan%7CFev%7CMar%7CAvr%7CMay&chxs=1N%2AcUSD0sz%2A%2C000000%2C14&chxt=x%2Cy',
        imageHeight: 500,
        imageWidth: 2000,
        imageAlt: 'A tall image'
    })
}


function Clicker1() {
    Swal.fire({
        imageUrl: "https://image-charts.com/chart?chbr=8&chd=t%3A10%2C15%2C25%2C30%2C40%2C80&chf=b0%2Clg%2C90%2C05B142%2C1%2C0CE858%2C0.2&chl=%7C%7C%7C%7C%2033%25%20%21%7Cx2%20&chma=0%2C0%2C10%2C10&chs=700x450&cht=bvs&chtt=Revenue%20per%20month&chxl=0%3A%7CJan%7CFev%7CMar%7CAvr%7CMay&chxs=1N%2AcUSD0sz%2A%2C000000%2C14&chxt=x%2Cy",
        imageHeight: 500,
        imageWidth: 2000,
        imageAlt: 'A tall image'
    })
}


function Clicker2() {
    Swal.fire({
        imageUrl: 'https://image-charts.com/chart?chco=E4061C&chd=t%3A10%2C25%2C30%2C40%2C12%2C48%2C100%2C20%2C47%2C29%2C84%2C30%2C27%2C50%2C70&chl=%7C%7C%7C%7C%7C%7Csuch%20a%20very%20%20%20big%20project%21&chm=B%2CFCECF4%2C0%2C0%2C0&chma=0%2C0%2C20%2C10&chs=700x450&cht=lc&chxl=0%3A%7CJun%7CJul%7CAug%7CSep%7COct%7CNov%7CDec%7CJan%7C1%3A%7C%7C50%7C100&chxt=x%2Cy',
        imageHeight: 500,
        imageWidth: 2000,
        imageAlt: 'A tall image'
    })
}

function Clicker3() {
    Swal.fire({
        imageUrl: 'https://image-charts.com/chart?chd=t%3A60%2C40%2C20&chdl=Image%7CCharts%7CRocks&chf=ps0-0%2Clg%2C45%2Cffeb3b%2C0.2%2Cf443367C%2C1%7Cps0-1%2Clg%2C45%2C8bc34a%2C0.2%2C0096887C%2C1%7Cps0-2%2Clg%2C45%2CEA469E%2C0.2%2C03A9F47C%2C1&chl=2018%7C2017%7C2015&chs=700x450&cht=pa&chxt=x%2Cy',
        imageHeight: 500,
        imageWidth: 5000,
        imageAlt: 'A tall image'
    })
}


//adding payroll
function payroll() {
    Swal.fire({
        title: "Are you sure?",
        icon: "tick",
        showCancelButton: true,
        confirmButtonColor: "green",
        cancelButtonColor: "#d33",
        confirmButtonText: "Make Payment"
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                window.location.href = "../PHP/addingPayroll.php"
            )
        }
    })
}

//for exit
function exit() {
    Swal.fire({
        title: "Are you sure?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "green",
        cancelButtonColor: "#d33",
        confirmButtonText: "To dashboard"
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                window.location.href = "../PHP/dashboard.php"
            )
        }
    });
}