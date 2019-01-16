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



# Optional Css Settings

default options are 30% width image, 70% width text, #B22222 text color and stays sidebyside.
->sizeOfImage(int) options only contains **10 and multiples**. It coming from css and add w-10, w-20 .. w-90, w-100 classes.

If do not want to sidebyside and want to text above the image use sizeOfImage with 100%
```
->sizeOfImage(100)
```

100% image is fill the div and put the text above.

Also there is a fontsize option. 
```
(new CustomizableImageCard)->fontsize("1.350rem"),
(new CustomizableImageCard)->fontsize("12px")
```

If you are using this with width
```
(new CustomizableImageCard)->width("1/2")
```

Need to add panelheight option. Because your image's height smaller then texts div height and padding displays realy boring. Solution is simple. Change card height with css
```
(new CustomizableImageCard)->width("1/2")->panelheight("75px")
```


# Sample

Demo image:
![alt text](https://raw.githubusercontent.com/aozen/customizable-image-card/master/img/Card.png)

Demo image2:

![alt text](https://raw.githubusercontent.com/aozen/customizable-image-card/master/img/card2.png)