# Cornerstone Responsive Grid
A Custom Element for X Theme's Cornerstone editor that lets you control _how_ the grid layout responds to screen width. Similar to Bootstrap's grid layout (but using flex!).

![alt_text](https://github.com/lucastobrazil/cornerstone-responsive-grid/blob/master/src/images/csrg_shot1b.png "Screenshot")

# What it does
CS Responsive Grid gives you more control over HOW your grid layouts respond at specific breakpoints in the viewport's width.

Naturally, all grid items 'flex' together, and you only need to specify those items that you want to take up certain spaces.

# Options
For each `grid-item`, you can specify the following width options:
- 'full' - grid item takes the full width of the grid
- 'hug' - grid item only takes up the width of its content
- '1/2', '1/3', '1/4' - grid item takes up half/one-third/one-quarter the width of the gri§d
- 'inherit' - basically the default. Items will grow/shrink to accommodate surrounding items
- 'fit' - a 'reset' if you want to tell it to just fill out the width when next to another grid item

For the `grid` itself, you can set:
- Vertical Alignment of `grid-items`
- Horizontal Alignment of `grid-items`
- Toggle grid padding/gutters on or off

# Responsive, You Say?
After specifying the default width (desktop-first) for each `grid-item`, you can add screen size-specific widths.

For example: "I want this column to be 1/4 wide on desktop, but go 1/2 width on tablets, then go full width on mobile.

# The Breakpoints
The media query breakpoints are the same as the CS Editor breakpoints (ie. when you change preview modes in Cornerstone).
- Large (980px - 1199px)
- Medium (768px - 979px)
- Small (481px - 767px)
- Extra Small (480px and smaler)

# It's nothing new
These items are basically just using CSS3's "flex" properties, but organised in a way that lets you think more about the BEHAVIOUR of the layout and less about writing (and repeating) CSS for layout. 

Vertical and Horizontal alignment of items is also handy.



# Installation
1. Clone the repo
2. Zip the entire folder
3. Upload to Wordpress as a Plugin
4. From Cornerstone editor go to Elements > CS Responsive Grid

# Browser Compatibility
