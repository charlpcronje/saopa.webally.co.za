+ Left side bar 
  - bg-color: #292929;
  - width: 236px
  + Branding Block 
    - bg-color: #d33026
    - Text
      - SAPOA Awards 
          - font-weight: bold
      - DASHBOARD 
          - font-weight: 100
  + left nav
    + left nav buttons 
      - bg-color: #313131;
      - color: #FFFFFF; 
      - border-bottom: 2px solid #7c7c7c: 
      - height: 47px
      + button 
        - text: Search
        - icon: bx_search 
        - events:
          - click: toggle Search Input visibility
      + button  
        - text: Dashboard
        - icon: dashboard_white
        - link: /dashboard
      + button
        - text:Admin
        - icon: downwards chevron
        - event: toggle sub-buttons
      + button
        - text:Judges, icon:downwards chevron
        - event: toggle sub-buttons
        + Sub-buttons
          - bg-color: #5E5E5E; 
          - color: #FFFFFF; 
          - border-bottom: 2px solid #7c7c7c:
          + button
            - text:View Judges
            - Icon: Dot
            - link: /judges
          + button  
            - text:Link Judges to Entries
            - Icon: Dot
            - link: /link-judges
          + button
            - text: Add Judge
            - Icon: Dot
            - link: /add-judge
      + button
        - test: Entries, 
        - icon: downwards chevron
        - events: 
          - click: toggle sub-buttons
        + Sub-buttons
          - bg-color: #5E5E5E; 
          - color: #FFFFFF; 
          - border-bottom: 2px solid #7c7c7c:
          + button
            - text: All Entries
            - Icon: Dot
            - link: /entries
          + button  
            - text: Judge Entries
            - Icon: Dot
            - link: /judge-entries
          + button
            - text: Payments
            - Icon: Dot
            - link: /payments
      + button
        - text: List Users
        - link: /users  
  + Header bar: 
    - height: 71px; 
    - bg-color: #292929
    - padding-top: 10px
    - padding-bottom: 10px
    + nav: left aligned 
      + icon buttons
        + button 
          - icon: hamburger
          - height: 24px 
          - Event: toggle left side bar
    + nav: right aligned
      + icon buttons
        + button
          - icon: cogwheel
          - height: 24px
          - events:
            - click: toggle dropdown menu
        + separator
          - icon: separator
          - height: 24px
        + User Profile Status Block: 
          - bg-color: #4c4c4c
          - color: #FFFFFF
          + sub-container
          - float: left    
            - icon: profile_circle
          + sub-container 
            - float: left  
            - text: {Administrator}
            - icon: green_dot, text: {status}
        + separator
          - icon: separator
          - height: 24px      
      + icon buttons- Icon Buttons
        + button
          - icon: flag
          - height: 24px
          - events:
            - click: toggle dropdown menu
        + button
          - icon: bell
          - height: 24px
          - events:
            - click: toggle dropdown menu 
        + button
          - icon: mail
          - height: 24px
          - events:
            - click: toggle dropdown menu  
- Content Section
  - {Heading} - color: #b7b7b7
  - {Breadcrumbs - color: #9b9b9b; Separated by ">"
    - Home, Dashboard Icon
    - Users
    - Add Judge}
  