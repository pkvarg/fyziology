# Web components

[![codecov](https://codecov.io/gh/patrikjak/web-components/graph/badge.svg?token=nfMkRsJSTe)](https://codecov.io/gh/patrikjak/web-components)

For default text without custom formatting pass attributes to the components.

```html
<pjcomponents::component title="Heading" />
```

If you want format the text, use labeled slots.

```html
<pjcomponents::component>
    <x-slot:heading>Head<span>ing</span></x-slot:heading>
</pjcomponents::component>
```

## Common components

### Colors

There is prepared .transparent class to set transparent background color.

```css
.transparent {
    background-color: transparent;
}
```

### Buttons

You can pass type attribute to specify button class. The result class will be `pj-components-button-{type}`.

Type can be used to define the color of the button.

Classes for colors

```css
/* Background colors */

.bg-background-primary {
    background-color: #f8f9fa;
}

.bg-background-secondary {
    background-color: #6c757d;
}

/* Text colors */

.text-text-primary {
    color: #343a40;
}

.text-text-secondary {
    color: #f8f9fa;
}

/* Border colors */

.border-border-primary {
    border-color: #f8f9fa;
}

.border-border-secondary {
    border-color: #6c757d;
}
```

## Navbars

### Navbar 1

**Obligatory attributes/slots:**
- logo _(slot with image)_
- items _(slot of at least **1** simple-link || items-link component)_

**Optional attributes/slots:**

None

## Portfolio headers

### Header 1

**Obligatory attributes/slots:**
- heading

**Optional attributes/slots:**
- text
- tags _(slot with tags)_

### Header 2

**Obligatory attributes/slots:**
- heading
- image

**Optional attributes/slots:**
- text
- tags _(slot with tags)_

## Headers

### Header 64

**Obligatory attributes/slots:**
- heading

**Optional attributes/slots:**
- text

### Header 46

**Obligatory attributes/slots:**
- heading

**Optional attributes/slots:**
- text

## Hero headers

### Header 9

**Obligatory attributes/slots:**

- heading
- image _(slot with image)_

**Optional attributes/slots:**

- text
- actions _(slot with buttons)_

## Features

### Layout 207

**Obligatory attributes/slots:**
- heading
- image

**Optional attributes/slots:**
- text
- tagline
- features _(array of features - list of strings)_
- feature-icon _(slot with image, it will be used for each feature)_
- actions _(slot with buttons)_

### Layout 306

**Obligatory attributes/slots:**
- heading
- features _(slot of **4** feature-306 components)_

**Optional attributes/slots:**
- text
- tagline
- actions _(slot with buttons)_

### Feature 306 item (single feature) - used in Layout 306

**Obligatory attributes/slots:**
- heading
- image

**Optional attributes/slots:**
- text

### Feature 290

**Obligatory attributes/slots:**

- features _(slot of **4** feature-290-item components)_

**Optional attributes/slots:**

### Layout 134

**Obligatory attributes/slots:**
- heading

**Optional attributes/slots:**
- text
- headline
- actions _(slot with buttons)_


### Feature 290 item (single feature) - used in Feature 290

**Obligatory attributes/slots:**

- heading
- image

**Optional attributes/slots:**

- text
- tagline
- actions _(slot with buttons)_

### Layout 122

**Obligatory attributes/slots:**
- features _(slot of **2** feature-122 components)_

**Optional attributes/slots:**
There are no optional attributes/slots.

### Feature 122 (single feature) - used in Layout 122

**Obligatory attributes/slots:**
- heading

**Optional attributes/slots:**
- text
- tagline
- actions _(slot with buttons)_

### Layout 231

**Obligatory attributes/slots:**
- features _(slot of **3** feature-231 components)_

**Optional attributes/slots:**
There are no optional attributes/slots.

### Feature 231 (single feature) - used in Layout 231

**Obligatory attributes/slots:**
- heading

**Optional attributes/slots:**
- text
- tagline
- actions _(slot with buttons)_

### Layout 292

**Obligatory attributes/slots:**
- features _(slot of **4** feature-292 components)_

**Optional attributes/slots:**
There are no optional attributes/slots.

### Feature 292 (single feature) - used in Layout 292

**Obligatory attributes/slots:**
- heading

**Optional attributes/slots:**
- text
- tagline
- actions _(slot with buttons)_

## Benefits

### Layout 66

**Obligatory attributes/slots:**
- heading

**Optional attributes/slots:**
- text
- benefits _(array of benefits - list of strings)_
- benefit-icon _(slot with image, it will be used for each benefit)_

## CTAs

### CTA 7

**Obligatory attributes/slots:**
- heading
- actions _(slot with at least 1 button)_

**Optional attributes/slots:**
- text

## Teams

### Team 17

**Obligatory attributes/slots:**
- heading
- team-members _(slot of at least **1** member-17 component)_

**Optional attributes/slots:**
- text
- tagline
- actions _(slot with buttons)_

### Member 17 (single member) - used in Team 17

**Obligatory attributes/slots:**
- avatar
- name

**Optional attributes/slots:**
- role
- socials _(slot of social-17 components)_

### Social 17 (single social) - used in Member 17

**Obligatory attributes/slots:**
- link
- icon

## Testimonials

### Testimonial 3

**Obligatory attributes/slots:**
- heading

**Optional attributes/slots:**
- text
- testimonials _(slot of 3 testimonial-3-item components)_

### Testimonial 3 item (single testimonial) - used in Testimonial 3

**Obligatory attributes/slots:**
- text

**Optional attributes/slots:**
- logo
- avatar
- author
- company

## Contacts

### Contact 14

**Obligatory attributes/slots:**
- heading
- items _(slot of at least **1** contact-14-item component)_
- map _(slot with image tag or iframe)_

**Optional attributes/slots:**
- text
- tagline

### Contact 14 item (single contact item) - used in Contact 14

**Obligatory attributes/slots:**
- icon
- heading

**Optional attributes/slots:**
- text
- link

### Contact 1

**Obligatory attributes/slots:**
- heading
- form

**Optional attributes/slots:**
- tagline
- text

## Footers

### Footer 7

**Obligatory attributes/slots:**
- primary links _(slot of at least **1** li > a component)_

**Optional attributes/slots:**
- logo _(slot with image)_
- secondary links _(slot of at least **1** li > a component)_
- text
- copyright

## Pricing

### Pricing 18

**Obligatory attributes/slots:**
- heading
- prices _(slot of **3** pricing-18-item component)_

**Optional attributes/slots:**
- text
- tagline

### Pricing 18c1 (Custom)

**Obligatory attributes/slots:**
- heading
- prices _(slot of at least **4** pricing-18-item component)_

**Optional attributes/slots:**
- text
- tagline

### Pricing shared item 1 (single pricing item) - used in Pricing 18 and Pricing 18c1

**Obligatory attributes/slots:**

None

**Optional attributes/slots:**
- heading
- tagline
- benefits _(slot of benefits - pricing-18-plan-benefit component)_

### Pricing shared plan benefit 1 (single benefit) - used in Pricing shared item 1

**Obligatory attributes/slots:**
- text

**Optional attributes/slots:**
- icon

## Long form Contents

### Content 7

**Obligatory attributes/slots:**
- heading
- text

**Optional attributes/slots:**

None

### Content 30

**Obligatory attributes/slots:**
- content

**Optional attributes/slots:**
- socials
- footer
- tags
- author

### Content 30 author - used in Content 30

**Obligatory attributes/slots:**
- name

**Optional attributes/slots:**
- avatar
- position

### Content 30 breadcrumbs - used in Content 30

**Obligatory attributes/slots:**
- breadcrumbs _(array of strings)_

**Optional attributes/slots:**

None

## Galleries

### Gallery 3

**Obligatory attributes/slots:**
- heading
- images _(slot of at least **3** img components)_

**Optional attributes/slots:**
- text

## FAQ

### FAQ 7

**Obligatory attributes/slots:**
- heading
- qa _(slot of qa-7 components)_

**Optional attributes/slots:**
- text
- secondary heading
- secondary text
- actions _(slot with buttons)_

### QA 7 (single question and answer) - used in FAQ 7

**Obligatory attributes/slots:**
- question
- answer