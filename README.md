# Description
This package offers you customizable card options. Which includes: 'content area, image, redirect url, text color, size of image and sidebyside(image and text)' options

# Installation
Using Composer:

```
composer require aozen/customizable-image-card
```

# Usage
In the resource file just add new CustomizableImageCard

```
public function cards(Request $request)
    {
        return [
            (new CustomizableImageCard)
            ->content("Your text is coming here. There is no limitation for this.")
            ->image("https://picsum.photos/600/120")
            ->url("https://github.com/aozen/customizable-image-card")
            ->color("#CD5C5C")
            ->sizeOfImage(30)
        ];
    }
```

Can be use just 
```
return [
            (new CustomizableImageCard)
        ];
```

default options are 30% width image, 70% width text, #B22222 text color and stays sidebyside.

If do not want to sidebyside and want to text above the image use sizeOfImage with 100%
```
->sizeOfImage(100)
```

100% image is fill the div and put the text above.

# Sample

Demo image:
![alt text](https://raw.githubusercontent.com/aozen/customizable-image-card/master/img/Card.png)

Demo image2:

![alt text](https://raw.githubusercontent.com/aozen/customizable-image-card/master/img/card2.png)