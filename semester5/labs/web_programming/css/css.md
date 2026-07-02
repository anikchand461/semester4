# CSS Basics

## What is CSS?

CSS = Cascading Style Sheets

CSS is used to style HTML pages.

Examples:

* Colors
* Fonts
* Spacing
* Borders
* Layouts
* Buttons

HTML provides the structure.
CSS provides the design.

---

## Ways to Add CSS

### 1. Inline CSS

```html
<h1 style="color:red;">Hello</h1>
```

Applied directly inside an HTML tag.

---

### 2. Internal CSS

```html
<head>
    <style>
        h1 {
            color: blue;
        }
    </style>
</head>
```

CSS is written inside the `<style>` tag.

---

### 3. External CSS (Recommended)

### index.html

```html
<link rel="stylesheet" href="style.css">
```

### style.css

```css
h1 {
    color: green;
}
```

Separates design from HTML.

---

## CSS Syntax

```css
selector {
    property: value;
}
```

Example:

```css
h1 {
    color: red;
}
```

* Selector → h1
* Property → color
* Value → red

---

## Common CSS Properties

### Text Color

```css
h1 {
    color: blue;
}
```

---

### Background Color

```css
body {
    background-color: lightgray;
}
```

---

### Font Size

```css
p {
    font-size: 20px;
}
```

---

### Text Alignment

```css
h1 {
    text-align: center;
}
```

---

### Border

```css
div {
    border: 2px solid black;
}
```

---

### Width and Height

```css
div {
    width: 300px;
    height: 200px;
}
```

---

## CSS Comments

```css
/* This is a CSS comment */
```

---

## Example

### HTML

```html
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Hello Anik</h1>
    <p>Learning CSS</p>

</body>
</html>
```

### CSS

```css
h1 {
    color: blue;
}

p {
    color: green;
}
```

---

## Quick Revision

* CSS = Cascading Style Sheets
* Used for styling webpages
* Inline CSS → style=""
* Internal CSS → `<style>`
* External CSS → `.css` file
* Syntax:

```css
selector {
    property: value;
}
```

Common Properties:

* color
* background-color
* font-size
* text-align
* border
* width
* height

```
```
