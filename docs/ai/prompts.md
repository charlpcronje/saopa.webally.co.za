# Prompts

## Dashboard

Now here is the html from Figma for the Dashboard and the CSS

```html
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="home">
      <div class="div">
        <div class="overlap">
          <div class="group">
            <img class="rectangle" src="img/rectangle-25.svg" />
            <img class="img" src="img/rectangle-26.svg" />
            <img class="rectangle-2" src="img/rectangle-27.svg" />
          </div>
          <div class="text-wrapper">Dashboard</div>
          <div class="text-wrapper-2">SAPOA Awards</div>
        </div>

         <!-- Repeat Region -->
          <!-- List Entry Component -->
            <div class="frame-2">
             <div class="frame-3">
              <div class="text-wrapper-3">Property Name</div>
              <div class="text-wrapper-4">Candidate Name</div>
            </div>
            <div class="rectangle-3"></div>
            <div class="text-wrapper-5">20 June 2024</div>
            <div class="rectangle-3"></div>
            <div class="text-wrapper-6">johndoe@email.com</div>
            <div class="rectangle-3"></div>
            <div class="div-wrapper"><div class="text-wrapper-7">Unpaid</div></div>
            <div class="rectangle-3"></div>
            <div class="info-indicators">
              <div class="group-2"><div class="rectangle-5"></div></div>
              <div class="frame-5">
                <div class="typcn-warning-wrapper">
                  <img class="typcn-warning" src="img/typcn-warning-outline-2.svg" />
                </div>
                <div class="text-wrapper-10">Missing Information</div>
              </div>
            </div>
          </div>
             <!-- End List Entry Component -->
         <!-- End Repeat Region -->
        <div class="navbar">
          <div class="frame-3"><div class="entry-title">Entry Title&nbsp;&nbsp;&amp; Candidate</div></div>
          <div class="rectangle-6"></div>
          <div class="text-wrapper-11">Date Created</div>
          <div class="rectangle-6"></div>
          <div class="text-wrapper-12">Email</div>
          <div class="rectangle-6"></div>
          <div class="text-wrapper-13">Invoice</div>
          <div class="rectangle-6"></div>
          <div class="text-wrapper-14">Submission Progress</div>
          <img class="mingcute-filter-line" src="img/mingcute-filter-line.svg" />
        </div>
        <div class="frame-6">
          <div class="frame-5">
            <img class="img-2" src="img/material-symbols-dashboard-customize-outline-rounded.svg" />
            <div class="text-wrapper-15">Home</div>
          </div>
          <img class="img-2" src="img/mingcute-right-line.svg" />
          <div class="text-wrapper-16">Dashboard</div>
        </div>


         <!-- Entry filters and download -->
        <div class="buttons-download"><button class="button">Download All</button></div>
        <div class="component">
          <img class="img-2" src="img/gg-add.svg" />
          <div class="text-wrapper-11">Add Entry</div>
        </div>
        <div class="component-2">
          <img class="img-2" src="img/bx-search-2.svg" />
          <div class="text-wrapper-17">Search Entrant</div>
        </div>
        <div class="component-3">
          <img class="img-3" src="img/mingcute-filter-line-2.svg" />
          <div class="text-wrapper-18">Filter by</div>
          <img class="img-3" src="img/mingcute-down-line.svg" />
        </div>
       <!-- End Entry filters and download -->

        <!-- Top Right Entries Panel with Stats --> 
        <div class="frame-wrapper">
          <div class="frame-7">
            <div class="frame-8">
              <div class="frame-9">
                <img class="img-4" src="img/mdi-bookmark-success-outline-3.svg" />
                <div class="ellipse-wrapper"><img class="ellipse" src="img/ellipse-4-3.svg" /></div>
                <div class="frame-10">
                  <div class="text-wrapper-19">Entries</div>
                  <div class="frame-11">
                    <div class="text-wrapper-20">60</div>
                    <div class="text-wrapper-21">Total Entries</div>
                  </div>
                  <div class="frame-11">
                    <div class="text-wrapper-20">49</div>
                    <div class="text-wrapper-21">Completed</div>
                  </div>
                  <div class="frame-11">
                    <div class="text-wrapper-20">0</div>
                    <div class="text-wrapper-21">Disqualified</div>
                  </div>
                </div>
              </div>
              <div class="component-4"><div class="text-wrapper-22">View All Entries</div></div>
            </div>
           <!-- End Top Right Entries Panel with Stats -->
       
           <!-- Second Panel for Invoices with Stats -->
            <div class="frame-8">
              <div class="frame-9">
                <img class="img-4" src="img/mdi-bookmark-success-outline-2.svg" />
                <div class="img-wrapper"><img class="ellipse" src="img/ellipse-4.svg" /></div>
                <div class="frame-10">
                  <div class="text-wrapper-19">Invoices</div>
                  <div class="frame-11">
                    <div class="text-wrapper-20">49</div>
                    <div class="text-wrapper-21">Total Invoices</div>
                  </div>
                  <div class="frame-11">
                    <div class="text-wrapper-20">43</div>
                    <div class="text-wrapper-21">Paid</div>
                  </div>
                  <div class="frame-11">
                    <div class="text-wrapper-20">6</div>
                    <div class="text-wrapper-21">Pending</div>
                  </div>
                </div>
              </div>
              <div class="component-4"><div class="view-all-entries">View All Invoices</div></div>
            </div>
           <!--End  Second Panel for Invoices with Stats -->

          <!--End  Third Panel for Judges with Stats -->
            <div class="frame-12">
              <div class="frame-13">
                <img class="img-4" src="img/mdi-bookmark-success-outline.svg" />
                <div class="group-3"><img class="ellipse" src="img/ellipse-4-2.svg" /></div>
                <div class="frame-10">
                  <div class="text-wrapper-19">Judges</div>
                  <div class="frame-11">
                    <div class="text-wrapper-20">10</div>
                    <div class="text-wrapper-21">Total Judges</div>
                  </div>
                  <div class="frame-11">
                    <div class="text-wrapper-20">10</div>
                    <div class="text-wrapper-21">Active</div>
                  </div>
                </div>
              </div>
              <div class="view-all-entries-wrapper"><div class="view-all-entries-2">View All Judges</div></div>
            </div>
          <!--End  Third Panel for Judges with Stats -->

          <!-- Recent Active Users Right Panel -->
            <div class="frame-14">
              <div class="text-wrapper-23">Recently Active Users</div>
              <div class="frame-15">
                <div class="frame-16"><input class="name" placeholder=" Name" type="text" /></div>
                <div class="text-wrapper-24">Last Active Date</div>
              </div>
              <div class="frame-17">
                <div class="frame-18">
                  <div class="frame-16">
                    <img class="img-4" src="img/iconoir-profile-circle-3.svg" />
                    <div class="frame-19">
                      <div class="text-wrapper-25">User Name</div>
                      <div class="text-wrapper-18">User</div>
                    </div>
                  </div>
                  <div class="text-wrapper-18">14 December, 2023</div>
                </div>
                <div class="frame-20">
                  <div class="frame-16">
                    <img class="frame-21" src="img/frame-123-2.svg" />
                    <div class="frame-19">
                      <div class="text-wrapper-26">User Name</div>
                      <div class="text-wrapper-5">Judge</div>
                    </div>
                  </div>
                  <div class="text-wrapper-5">14 December, 2023</div>
                </div>


             <!-- Begin Recent Users / Judges Repeat Region -->
                <!-- Active User -->
                <div class="frame-18">
                  <div class="frame-16">
                    <img class="img-4" src="img/iconoir-profile-circle-2.svg" />
                    <div class="frame-19">
                      <div class="text-wrapper-25">User Name</div>
                      <div class="text-wrapper-18">User</div>
                    </div>
                  </div>
                  <div class="text-wrapper-18">14 December, 2023</div>
                </div>
               <!-- End Active User -->
              <!-- Active Judge -->
                <div class="frame-20">
                  <div class="frame-16">
                    <img class="frame-21" src="img/frame-123-3.svg" />
                    <div class="frame-19">
                      <div class="text-wrapper-26">User Name</div>
                      <div class="text-wrapper-5">Judge</div>
                    </div>
                  </div>
                  <div class="text-wrapper-5">14 December, 2023</div>
                </div>
               <!-- End Active Judge -->
                <!-- End Recent Users / Judges Repeat Region -->

              <div class="frame-22"><div class="text-wrapper-27">View All Users</div></div>
            </div>
          </div>
        </div>

<!-- Top Nav Profile Block -->
        <div class="group-4">
          <div class="frame-23">
            <img class="frame-21" src="img/frame-22.svg" />
            <div class="rectangle-7"></div>
            <div class="frame-24">
              <img class="img-4" src="img/iconoir-profile-circle.png" />
              <div class="frame-25">
                <div class="text-wrapper-28">Administrator</div>
                <div class="frame-4">
                  <div class="ellipse-2"></div>
                  <div class="text-wrapper-29">Online</div>
                </div>
              </div>
            </div>
            <div class="rectangle-7"></div>
            <img class="img-4" src="img/solar-settings-linear.svg" />
          </div>
          <img class="ci-hamburger-md" src="img/ci-hamburger-md.svg" />
        </div>
<!-- End Top Nav Profile Block -->

<!-- Left Nav -->
        <div class="group-5">
          <div class="overlap-group">
            <div class="frame-26">
              <div class="text-wrapper-30">SAPOA Awards</div>
              <div class="text-wrapper-31">DASHBOARD</div>
            </div>
          </div>
          <div class="overlap-2">
            <div class="frame-27">
              <div class="frame-28">
                <div class="text-wrapper-32">Search...</div>
                <img class="img-4" src="img/bx-search.svg" />
              </div>
              <div class="frame-28">
                <div class="text-wrapper-32">Dashboard</div>
                <img class="img-4" src="img/material-symbols-dashboard-customize-outline-rounded-2.svg" />
              </div>
              <div class="frame-29">
                <div class="frame-27">
                  <div class="frame-28">
                    <div class="text-wrapper-32">Admin</div>
                    <img class="img-4" src="img/mingcute-left-line-2.svg" />
                  </div>
                  <div class="frame-19">
                    <div class="frame-30">
                      <img class="tabler-point-filled" src="img/tabler-point-filled-11.svg" />
                      <div class="judges">Judging Categories</div>
                    </div>
                    <div class="frame-30">
                      <img class="tabler-point-filled-2" src="img/tabler-point-filled.svg" />
                      <div class="judges">Scoring Criteria</div>
                    </div>
                    <div class="frame-30">
                      <img class="tabler-point-filled-3" src="img/tabler-point-filled-9.svg" />
                      <div class="judges">Innovative Scoring Criteria</div>
                    </div>
                    <div class="frame-30">
                      <img class="tabler-point-filled-4" src="img/tabler-point-filled-4.svg" />
                      <div class="judges">Competitions Settings</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="frame-31">
                <div class="frame-27">
                  <div class="frame-28">
                    <div class="text-wrapper-32">Judges</div>
                    <img class="img-4" src="img/mingcute-left-line.svg" />
                  </div>
                  <div class="frame-19">
                    <div class="frame-30">
                      <img class="img-4" src="img/tabler-point-filled-10.svg" />
                      <div class="text-wrapper-33">Add Judges</div>
                    </div>
                    <div class="frame-30">
                      <img class="img-4" src="img/tabler-point-filled-3.svg" />
                      <div class="text-wrapper-33">List Judges</div>
                    </div>
                    <div class="frame-30">
                      <img class="img-4" src="img/tabler-point-filled-7.svg" />
                      <div class="text-wrapper-33">Judges</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="frame-29">
                <div class="frame-27">
                  <div class="frame-28">
                    <div class="text-wrapper-32">Entries</div>
                    <img class="img-4" src="img/mingcute-left-line-3.svg" />
                  </div>
                  <div class="frame-19">
                    <div class="frame-30">
                      <img class="tabler-point-filled-5" src="img/tabler-point-filled-6.svg" />
                      <div class="judges">Full List</div>
                    </div>
                    <div class="frame-30">
                      <img class="tabler-point-filled-6" src="img/tabler-point-filled-8.svg" />
                      <div class="judges">Archived Entries</div>
                    </div>
                    <div class="frame-30">
                      <img class="tabler-point-filled-7" src="img/tabler-point-filled-5.svg" />
                      <div class="judges">Completed Entries</div>
                    </div>
                    <div class="frame-30">
                      <img class="tabler-point-filled-8" src="img/tabler-point-filled-2.svg" />
                      <div class="judges">Scored Entries</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="frame-32"><div class="text-wrapper-32">List Users</div></div>
            </div>
          </div>
        </div>
<!-- End Left Nav -->
      </div>
    </div>
  </body>
</html>

```

```css
.home {
  background-color: #ffffff;
  display: flex;
  flex-direction: row;
  justify-content: center;
  width: 100%;
}

.home .div {
  background-color: #ffffff;
  overflow: hidden;
  width: 1440px;
  height: 2229px;
  position: relative;
}

.home .overlap {
  position: absolute;
  width: 802px;
  height: 117px;
  top: 116px;
  left: 260px;
  border-radius: 6px;
}

.home .group {
  position: absolute;
  width: 802px;
  height: 117px;
  top: 0;
  left: 0;
  background-color: #f4f4f4;
  border-radius: 6px;
}

.home .rectangle {
  position: absolute;
  width: 40px;
  height: 92px;
  top: 0;
  left: 710px;
}

.home .img {
  position: absolute;
  width: 40px;
  height: 92px;
  top: 0;
  left: 655px;
}

.home .rectangle-2 {
  position: absolute;
  width: 40px;
  height: 92px;
  top: 0;
  left: 600px;
}

.home .text-wrapper {
  position: absolute;
  top: 39px;
  left: 22px;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  color: #d72c20;
  font-size: 48px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.home .text-wrapper-2 {
  position: absolute;
  top: 24px;
  left: 22px;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  color: #d72c20;
  font-size: 16px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.home .frame {
  display: inline-flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 4px;
  position: absolute;
  top: 325px;
  left: 260px;
}

.home .frame-2 {
  display: flex;
  width: 802px;
  height: 63.7px;
  align-items: center;
  justify-content: space-between;
  padding: 12px;
  position: relative;
  border-radius: 6px;
  border: 1px solid;
  border-color: #d4d4d4;
}

.home .frame-3 {
  display: flex;
  flex-direction: column;
  width: 164px;
  align-items: flex-start;
  position: relative;
}

.home .text-wrapper-3 {
  position: relative;
  width: 164px;
  margin-top: -1px;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  color: #383838;
  font-size: 12px;
  letter-spacing: 0;
  line-height: normal;
}

.home .text-wrapper-4 {
  position: relative;
  width: 164px;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #383838;
  font-size: 10px;
  letter-spacing: 0;
  line-height: normal;
}

.home .rectangle-3 {
  position: relative;
  width: 1px;
  height: 28px;
  background-color: #d9d9d9;
}

.home .text-wrapper-5 {
  color: #383838;
  position: relative;
  width: fit-content;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  font-size: 10px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.home .text-wrapper-6 {
  position: relative;
  width: 128px;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #0075ff;
  font-size: 10px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.home .paid {
  display: inline-flex;
  min-width: 62px;
  align-items: center;
  justify-content: center;
  padding: 4px 12px;
  position: relative;
  flex: 0 0 auto;
  background-color: #24b400;
  border-radius: 6px;
}

.home .text-wrapper-7 {
  position: relative;
  flex: 1;
  margin-top: -1px;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  color: #ffffff;
  font-size: 10px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.home .div-2 {
  display: inline-flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 4px;
  position: relative;
  flex: 0 0 auto;
  margin-top: -4.15px;
  margin-bottom: -4.15px;
}

.home .frame-4 {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  position: relative;
  flex: 0 0 auto;
}

.home .text-wrapper-8 {
  margin-top: -1px;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  position: relative;
  width: fit-content;
  color: #383838;
  font-size: 10px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.home .rectangle-wrapper {
  position: relative;
  width: 145.43px;
  height: 12px;
  background-color: #ba9659;
  border-radius: 4px;
}

.home .rectangle-4 {
  width: 145px;
  height: 12px;
  background-color: #ba9659;
  border-radius: 4px;
}

.home .img-2 {
  position: relative;
  width: 16px;
  height: 16px;
}

.home .text-wrapper-9 {
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  position: relative;
  width: fit-content;
  color: #383838;
  font-size: 10px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.home .div-wrapper {
  display: inline-flex;
  min-width: 62px;
  align-items: center;
  justify-content: center;
  padding: 4px 12px;
  position: relative;
  flex: 0 0 auto;
  background-color: #ff1404;
  border-radius: 6px;
}

.home .info-indicators {
  display: inline-flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 6px;
  position: relative;
  flex: 0 0 auto;
}

.home .group-2 {
  position: relative;
  width: 145.43px;
  height: 12px;
  background-color: #d9d9d9;
  border-radius: 4px;
}

.home .rectangle-5 {
  width: 110px;
  height: 12px;
  background-color: #777777;
  border-radius: 4px;
}

.home .frame-5 {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  position: relative;
  flex: 0 0 auto;
}

.home .typcn-warning-wrapper {
  position: relative;
  width: 18px;
  height: 18px;
  border-radius: 9px;
  border: 1px solid;
  border-color: #ff1404;
}

.home .typcn-warning {
  position: absolute;
  width: 11px;
  height: 11px;
  top: 2px;
  left: 2px;
}

.home .text-wrapper-10 {
  position: relative;
  width: fit-content;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #a3a3a3;
  font-size: 10px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.home .navbar {
  display: flex;
  width: 802px;
  height: 38px;
  align-items: center;
  justify-content: space-between;
  padding: 12px;
  position: absolute;
  top: 282px;
  left: 260px;
  background-color: #292929;
  border-radius: 6px;
}

.home .entry-title {
  position: relative;
  width: 164px;
  margin-top: -1px;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  color: #ffffff;
  font-size: 10px;
  letter-spacing: 0;
  line-height: normal;
}

.home .rectangle-6 {
  margin-top: -7px;
  margin-bottom: -7px;
  background-color: #292929;
  position: relative;
  width: 1px;
  height: 28px;
}

.home .text-wrapper-11 {
  position: relative;
  width: fit-content;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  color: #ffffff;
  font-size: 10px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.home .text-wrapper-12 {
  width: 128px;
  position: relative;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  color: #ffffff;
  font-size: 10px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.home .text-wrapper-13 {
  width: 62px;
  position: relative;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  color: #ffffff;
  font-size: 10px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.home .text-wrapper-14 {
  position: relative;
  width: 145.43px;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  color: #ffffff;
  font-size: 10px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.home .mingcute-filter-line {
  position: relative;
  width: 24px;
  height: 24px;
  margin-top: -5px;
  margin-bottom: -5px;
}

.home .frame-6 {
  display: inline-flex;
  align-items: center;
  gap: 12px;
  position: absolute;
  top: 85px;
  left: 919px;
}

.home .text-wrapper-15 {
  color: #9b9b9b;
  position: relative;
  width: fit-content;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  font-size: 10px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.home .text-wrapper-16 {
  position: relative;
  width: fit-content;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #b7b7b7;
  font-size: 10px;
  white-space: nowrap;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.home .buttons-download {
  display: flex;
  width: 94px;
  align-items: center;
  justify-content: center;
  padding: 6px 12px;
  position: absolute;
  top: 246px;
  left: 968px;
  background-color: #0075ff;
  border-radius: 6px;
}

.home .button {
  all: unset;
  box-sizing: border-box;
  position: relative;
  width: fit-content;
  margin-top: -1px;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  color: #ffffff;
  font-size: 10px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.home .component {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 6px 12px;
  position: absolute;
  top: 244px;
  left: 259px;
  background-color: #ba9659;
  border-radius: 6px;
  border: 1px solid;
  border-color: #d5c09d;
}

.home .component-2 {
  width: 203px;
  gap: 6px;
  position: absolute;
  top: 244px;
  left: 366px;
  background-color: #f7f7f7;
  border: 1px solid;
  border-color: #e4e4e4;
  display: flex;
  align-items: center;
  padding: 6px 12px;
  border-radius: 6px;
}

.home .text-wrapper-17 {
  color: #c7c7c7;
  font-size: 10px;
  white-space: nowrap;
  position: relative;
  width: fit-content;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.home .component-3 {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 6px 12px;
  position: absolute;
  top: 245px;
  left: 854px;
  background-color: #f7f7f7;
  border-radius: 6px;
  border: 1px solid;
  border-color: #4b4b4b;
}

.home .img-3 {
  position: relative;
  width: 14px;
  height: 14px;
}

.home .text-wrapper-18 {
  position: relative;
  width: fit-content;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 10px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.home .frame-wrapper {
  position: fixed;
  width: 354px;
  height: 2158px;
  top: 71px;
  left: 1086px;
  background-color: #f5f5f5;
}

.home .frame-7 {
  display: inline-flex;
  flex-direction: column;
  height: 1137px;
  align-items: flex-start;
  gap: 12px;
  position: relative;
  top: 21px;
  left: 24px;
}

.home .frame-8 {
  flex-direction: column;
  width: 306px;
  justify-content: center;
  gap: 6px;
  padding: 16px 32px;
  background-color: #ffffff;
  border-radius: 6px;
  border-left-width: 16px;
  border-left-style: solid;
  border-color: #d72c20;
  display: flex;
  align-items: flex-start;
  position: relative;
  flex: 0 0 auto;
}

.home .frame-9 {
  display: flex;
  align-items: center;
  gap: 12px;
  position: relative;
  align-self: stretch;
  width: 100%;
  flex: 0 0 auto;
}

.home .img-4 {
  position: relative;
  width: 24px;
  height: 24px;
}

.home .ellipse-wrapper {
  position: relative;
  width: 64px;
  height: 64px;
  background-image: url(./img/ellipse-3-3.svg);
  background-size: 100% 100%;
}

.home .ellipse {
  position: absolute;
  width: 64px;
  height: 64px;
  top: 0;
  left: 0;
}

.home .frame-10 {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 5px;
  position: relative;
  flex: 1;
  flex-grow: 1;
}

.home .text-wrapper-19 {
  position: relative;
  width: fit-content;
  margin-top: -1px;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  color: #7c7c7c;
  font-size: 24px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.home .frame-11 {
  gap: 12px;
  align-self: stretch;
  width: 100%;
  display: flex;
  align-items: flex-start;
  position: relative;
  flex: 0 0 auto;
}

.home .text-wrapper-20 {
  position: relative;
  width: 17px;
  margin-top: -1px;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  color: #7c7c7c;
  font-size: 12px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.home .text-wrapper-21 {
  position: relative;
  width: fit-content;
  margin-top: -1px;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #7c7c7c;
  font-size: 12px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.home .component-4 {
  display: flex;
  width: 94px;
  align-items: center;
  justify-content: center;
  padding: 6px 12px;
  position: relative;
  flex: 0 0 auto;
  background-color: #343434;
  border-radius: 6px;
}

.home .text-wrapper-22 {
  margin-left: -3.5px;
  margin-right: -3.5px;
  color: #ffffff;
  position: relative;
  width: fit-content;
  margin-top: -1px;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  font-size: 10px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.home .img-wrapper {
  position: relative;
  width: 64px;
  height: 64px;
  background-image: url(./img/ellipse-3.svg);
  background-size: 100% 100%;
}

.home .view-all-entries {
  margin-left: -7px;
  margin-right: -7px;
  position: relative;
  width: fit-content;
  margin-top: -1px;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  color: #ffffff;
  font-size: 10px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.home .frame-12 {
  display: flex;
  flex-direction: column;
  width: 306px;
  height: 121px;
  align-items: flex-start;
  justify-content: center;
  gap: 6px;
  padding: 16px 32px;
  position: relative;
  background-color: #ffffff;
  border-radius: 6px;
  border-left-width: 16px;
  border-left-style: solid;
  border-color: #d72c20;
}

.home .frame-13 {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 12px;
  position: relative;
  align-self: stretch;
  width: 100%;
  flex: 0 0 auto;
  margin-top: -5px;
}

.home .group-3 {
  position: relative;
  width: 64px;
  height: 64px;
  background-image: url(./img/ellipse-3-2.svg);
  background-size: 100% 100%;
}

.home .view-all-entries-wrapper {
  width: 94px;
  justify-content: center;
  position: relative;
  flex: 0 0 auto;
  margin-bottom: -5px;
  background-color: #343434;
  display: flex;
  align-items: center;
  padding: 6px 12px;
  border-radius: 6px;
}

.home .view-all-entries-2 {
  margin-left: -4.5px;
  margin-right: -4.5px;
  position: relative;
  width: fit-content;
  margin-top: -1px;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  color: #ffffff;
  font-size: 10px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.home .frame-14 {
  display: flex;
  flex-direction: column;
  height: 509px;
  align-items: flex-start;
  gap: 6px;
  padding: 12px;
  position: relative;
  align-self: stretch;
  width: 100%;
  background-color: #ffffff;
  border-radius: 6px;
}

.home .text-wrapper-23 {
  position: relative;
  width: fit-content;
  margin-top: -1px;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  color: #000000;
  font-size: 16px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.home .frame-15 {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0px 0px 6px;
  position: relative;
  align-self: stretch;
  width: 100%;
  flex: 0 0 auto;
}

.home .frame-16 {
  display: flex;
  width: 145.5px;
  align-items: center;
  gap: 6px;
  position: relative;
}

.home .name {
  display: inline-flex;
  flex-direction: column;
  align-items: flex-start;
  position: relative;
  flex: 0 0 auto;
  border: none;
  background: none;
  margin-top: -1px;
  color: #787878;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  font-size: 10px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
  padding: 0;
}

.home .text-wrapper-24 {
  position: relative;
  width: fit-content;
  margin-top: -1px;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  color: #787878;
  font-size: 10px;
  text-align: right;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.home .frame-17 {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 4px;
  position: relative;
  align-self: stretch;
  width: 100%;
  flex: 0 0 auto;
}

.home .frame-18 {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 6px;
  position: relative;
  align-self: stretch;
  width: 100%;
  flex: 0 0 auto;
  background-color: #ffffff;
  border-radius: 6px;
  border: 1px solid;
  border-color: #ebebeb;
}

.home .frame-19 {
  display: inline-flex;
  flex-direction: column;
  align-items: flex-start;
  position: relative;
  flex: 0 0 auto;
}

.home .text-wrapper-25 {
  margin-top: -1px;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  position: relative;
  width: fit-content;
  color: #000000;
  font-size: 10px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.home .frame-20 {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 6px;
  position: relative;
  align-self: stretch;
  width: 100%;
  flex: 0 0 auto;
  background-color: #ffffff;
  border-radius: 6px;
  border: 1px solid;
  border-color: #ececec;
}

.home .frame-21 {
  position: relative;
  flex: 0 0 auto;
}

.home .text-wrapper-26 {
  position: relative;
  width: fit-content;
  margin-top: -1px;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  color: #383838;
  font-size: 10px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.home .frame-22 {
  display: inline-flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
  gap: 12px;
  padding: 6px;
  position: relative;
  flex: 0 0 auto;
  background-color: #ffffff;
  border-radius: 6px;
  border: 1px solid;
  border-color: #7f7f7f;
}

.home .text-wrapper-27 {
  color: #7f7f7f;
  position: relative;
  width: fit-content;
  margin-top: -1px;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  font-size: 10px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.home .group-4 {
  position: fixed;
  width: 1204px;
  height: 71px;
  top: 0;
  left: 236px;
  background-color: #292929;
}

.home .frame-23 {
  display: inline-flex;
  align-items: center;
  gap: 24px;
  position: absolute;
  top: 14px;
  left: 820px;
}

.home .rectangle-7 {
  background-color: #ffffff;
  position: relative;
  width: 1px;
  height: 28px;
}

.home .frame-24 {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  padding: 6px 12px;
  position: relative;
  flex: 0 0 auto;
  background-color: #4c4c4c;
  border-radius: 6px;
}

.home .frame-25 {
  display: inline-flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
  gap: 4px;
  position: relative;
  flex: 0 0 auto;
}

.home .text-wrapper-28 {
  position: relative;
  width: fit-content;
  margin-top: -1px;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  color: #ffffff;
  font-size: 12px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.home .ellipse-2 {
  position: relative;
  width: 6px;
  height: 6px;
  background-color: #24b400;
  border-radius: 3px;
}

.home .text-wrapper-29 {
  position: relative;
  width: fit-content;
  margin-top: -1px;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #ffffff;
  font-size: 10px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.home .ci-hamburger-md {
  position: absolute;
  width: 24px;
  height: 24px;
  top: 21px;
  left: 22px;
}

.home .group-5 {
  position: fixed;
  width: 236px;
  height: 2229px;
  top: 0;
  left: 0;
}

.home .overlap-group {
  position: absolute;
  width: 236px;
  height: 71px;
  top: 0;
  left: 0;
  background-color: #d72c20;
}

.home .frame-26 {
  display: inline-flex;
  height: 17px;
  align-items: flex-start;
  gap: 6px;
  position: relative;
  top: 25px;
  left: 20px;
}

.home .text-wrapper-30 {
  position: relative;
  width: fit-content;
  margin-top: -1px;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  color: #ffffff;
  font-size: 14px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.home .text-wrapper-31 {
  position: relative;
  width: fit-content;
  margin-top: -1px;
  font-family: "Inter-Light", Helvetica;
  font-weight: 300;
  color: #ffffff;
  font-size: 14px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.home .overlap-2 {
  position: absolute;
  width: 236px;
  height: 2158px;
  top: 71px;
  left: 0;
  background-color: #292929;
}

.home .frame-27 {
  display: inline-flex;
  flex-direction: column;
  align-items: flex-start;
  position: relative;
}

.home .frame-28 {
  display: flex;
  width: 236px;
  align-items: center;
  justify-content: space-between;
  padding: 12px 24px;
  position: relative;
  flex: 0 0 auto;
  background-color: #313131;
  border-bottom-width: 1px;
  border-bottom-style: solid;
  border-color: #959595;
}

.home .text-wrapper-32 {
  color: #ffffff;
  font-size: 12px;
  position: relative;
  width: fit-content;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.home .frame-29 {
  position: relative;
  width: 236px;
  height: 48px;
  overflow: hidden;
}

.home .frame-30 {
  display: flex;
  width: 236px;
  align-items: center;
  padding: 12px 24px;
  position: relative;
  flex: 0 0 auto;
  background-color: #5e5e5e;
  border-bottom-width: 1px;
  border-bottom-style: solid;
  border-color: #959595;
}

.home .tabler-point-filled {
  position: relative;
  width: 24px;
  height: 24px;
  margin-bottom: -297.16px;
  margin-right: -557px;
}

.home .judges {
  font-family: "Inter-Light", Helvetica;
  font-weight: 300;
  color: #ffffff;
  font-size: 12px;
  position: relative;
  width: fit-content;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.home .tabler-point-filled-2 {
  margin-bottom: -249.16px;
  margin-right: -557px;
  position: relative;
  width: 24px;
  height: 24px;
}

.home .tabler-point-filled-3 {
  margin-bottom: -201.16px;
  margin-right: -557px;
  position: relative;
  width: 24px;
  height: 24px;
}

.home .tabler-point-filled-4 {
  margin-bottom: -153.16px;
  margin-right: -557px;
  position: relative;
  width: 24px;
  height: 24px;
}

.home .frame-31 {
  position: relative;
  width: 236px;
  height: 240px;
}

.home .text-wrapper-33 {
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #ffffff;
  font-size: 12px;
  position: relative;
  width: fit-content;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.home .tabler-point-filled-5 {
  margin-bottom: -9.16px;
  margin-right: -557px;
  position: relative;
  width: 24px;
  height: 24px;
}

.home .tabler-point-filled-6 {
  margin-top: -38.84px;
  margin-right: -557px;
  position: relative;
  width: 24px;
  height: 24px;
}

.home .tabler-point-filled-7 {
  margin-top: -86.84px;
  margin-right: -557px;
  position: relative;
  width: 24px;
  height: 24px;
}

.home .tabler-point-filled-8 {
  margin-top: -134.84px;
  margin-right: -557px;
  position: relative;
  width: 24px;
  height: 24px;
}

.home .frame-32 {
  display: flex;
  flex-direction: column;
  width: 236px;
  height: 48px;
  align-items: flex-start;
  justify-content: space-around;
  gap: 40px;
  padding: 12px 24px;
  position: relative;
  background-color: #313131;
  border-bottom-width: 1px;
  border-bottom-style: solid;
  border-color: #959595;
}
```

## Dashboard Taaks

Based on the provided HTML structure and associated CSS for the dashboard, we have to create several components, models, controllers, and routes to ensure the full functionality and responsiveness of the dashboard. Let's organize the tasks into a structured list.

### 1. Controllers
1.1. `DashboardController`
   - Manage the display of the dashboard, including stats and recent activities.

1.2. `EntryController`
   - Handle the creation, reading, updating, and deleting of entries.

1.3. `UserController`
   - Manage user profiles, activity status, and user-related actions on the dashboard.

1.4. `JudgeController`
   - Handle judge profiles, their assignments, and interactions with entries.

1.5. `InvoiceController`
   - Oversee the creation and management of invoices and payments.

### 2. Models
2.1. `User`
   - Contains user details and status information.

2.2. `Entry`
   - Holds entry details, relationships with users, documents, images, and invoices.

2.3. `Judge`
   - Stores judge information and their ratings for entries.

2.4. `Invoice`
   - Manages invoice details and payment statuses.

### 3. Views (Blade Templates)
3.1. `dashboard.blade.php`
   - Main dashboard layout containing sections like entries, invoices, judges, and recent activities.

3.1. `partials/entry-list-item.blade.php`
   - A reusable list item for displaying each entry in the dashboard.

3.2. `partials/user-panel.blade.php`
   - A panel for displaying user activity and status.

3.4. `partials/invoice-panel.blade.php`
   - Panel for showing invoice information and status.

3.5. `partials/judge-panel.blade.php`
   - Displays judge-related actions and information.

### 4. Routes (web.php)
4.1. Main dashboard view route.
4.2. CRUD operations for entries.
4.3. User profile and status update routes.
4.4. Judge management routes.
4.5. Invoice and payment routes.

### 5. JavaScript (Alpine.js)
5.1. `dashboard.js`
   - Interactivity for the main dashboard components.

5.2. `entry.js`
   - Scripts for handling entry-related actions like CRUD operations.

5.3. `user.js`
   - Scripts for managing user interactivity on the dashboard.

5.4. `judge.js`
   - JavaScript for judge interactions with the dashboard.

5.5. `invoice.js`
   - Payment and invoice-related interactivity.

### 6. CSS (Tailwind CSS)
6.1. `dashboard.css`
   - Styles for the dashboard and its components.

6.2. `entry.css`
   - Styles specific to the entry list items.

6.3. `user.css`
   - Styling for the user panel.

6.4. `judge.css`
   - Styles for the judge panel.

6.5. `invoice.css`
   - Styling for the invoice panel.

### 7. Alpine.js Components
7.1. Entry List
   - A component for rendering each entry in the list.

7.2. User Activity Indicator
   - A small component indicating user activity status.

7.3. Invoice Status Indicator
   - Displaying the status of invoices (paid, unpaid, pending).

7.4. Entry Submission Progress
   - A progress bar or indicator for entry submission status.

7.5. Filter and Search
   - Components for filtering entries and searching within the dashboard.

The tasks have been broken down by the type of file and purpose. This provides a clear path for developing the dashboard's full functionality in a structured and manageable way. Each task will involve creating the file, writing the necessary code following best practices, and ensuring proper interaction between front-end and back-end components.