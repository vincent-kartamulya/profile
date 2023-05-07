![Logo](public/img/home/logo.png)

# All About Vincent (A Web Programming Project)

This is a profile website project for Web Programming Course from PPTI BCA. I'm Vincent Kartamulya Santoso and in this website you will see my little story with an experience. For me, the point of this website is to tell story to all of you and how my intent and message can be delivered to all of you in a not boring but simple design. There is also a page that consist of the showcase of some of my top Indomie variants. Why Indomie you asked? Who doesn't love Indomie! Not me of course.


<br />

## 👩‍💻 Information
|  |  |
| ------------- | ------------- |
| Name          | Vincent Kartamulya Santoso  |
| NIM           | 2502041344  |
| Class         | PPTI 12  |
| Lecturer      | Anderies, B.Eng., S.Kom., M.Kom.  |
| University    | Binus University x PPTI BCA |


<br />


## 🛠 Technology Used
- Laravel
- CSS Framework: Bootstrap (installed on pc using vite and npm)
- HTML
- CSS
- Javascript

<br />

## ⚡️ Section
- General
- Learning
- Project
- Contact Me
- Indomie Main Section
- Indomie Detail Section

<br />

## Website Overview (GIF)
<br />

![](public/img/video.gif)

<br />

## 1. General Section

<br />

![App Screenshot](public/img/home/home.png)

This is the initial display when the user visits this website. There will be a navbar that refers to a certain section, as well as an animation in the form of typing. This page contains brief information about the name.

<br />

![App Screenshot](public/img/home/funfact.png)

Scroll down and you will find funfacts about the name Vincent. In this section there is also an animation where when the cursor approaches this section, there is a tilting animation according to the movement and position of the cursor.

<br />

![App Screenshot](public/img/home/map.png)

In this section, there is information about Vincent's place and date of birth. What's also interesting here is the embeded google maps where Vincent was born, so you can scroll and explore the place where he was born


<br />

## 2. Learning Section

![App Screenshot](public/img/home/learn-connect.png)

Before entering the learning section, there is sentence who greets you first, because the concept of this website is to read like a comic or book and have fun, not an ordinary website so it is hoped that a 2-way connection can occur.

<br />

![App Screenshot](public/img/home/learning.png)

This is the core of the learning section where you can see Vincent's educational history from elementary school to the present. There is also an animation here, when you place the cursor on a section, then information on the name of the school and information about it will appear at a glance.

<br />

![App Screenshot](public/img/home/learn-connect2.png)

Then, we will meet again with the conversation, where Vincent tells about his life at PPTI. As before, the purpose of this website is to tell stories.

<br />

![App Screenshot](public/img/home/friends.png)

In this section, Vincent tells a sneak peak of his life in PPTI. There is a carousel of images of his friends.

<br />

![App Screenshot](public/img/home/skill.png)

You will see skills that Vincent have learn in the form of automatic slider.



<br />

## 3. Project Section

![App Screenshot](public/img/home/project.png)

This section gives you information about any projects Vincent has worked on. In addition, also in each project, there is a button, where you can see immediately both the results and the project's source code. Making this view is assisted by Bootstrap.


<br />

## 4. Contact Me Section

![App Screenshot](public/img/home/contactme.png)

Finally, if you want to have a chat with me or just grab a coffee together, you can contact me in this section. There are instagram, whatsapp and github. If you click one of the icon, there will be like disco animation. And below that there is a footer. 


<br />

## 5. Indomie Main Section

![App Screenshot](public/img/indomie/main.png)

This is the main page where there are some of my top Indomie variants. You can see the name, image, price, and status. Each status have their own color where you can see below
|Status  | Color |
| ------------- | ------------- |
| R (Rare) | ![#c0c0c0](https://via.placeholder.com/10/c0c0c0?text=+) Silver  |
| SR (Super Rare) | ![#ffd700](https://via.placeholder.com/10/ffd700?text=+) Gold  |
| SSR (Super Super Rare) | ![#ff0000](https://via.placeholder.com/10/ff0000?text=+) Red|

There is an animation if you hover the card and if you click a card, it will go to the detail page of the chosen variant.

<br />

![App Screenshot](public/img/indomie/seomain.png)
And for SEO purposes, the meta description for this page is consist of every description of the variant and the title if consist of name of every variant also.
The code being extends from master.blade.php as follow.
```bash
<meta name="viewport" content= "@yield('description')">
<title>@yield('title')</title>
```
Then in the child extended from master.blade.php there will be looping of keyword for every item as below.
```bash
@section('title')
    Best Seller Indomie Berbagai Varian Rasa
    @foreach ($produk as $item)
        {{$item['name']}}
    @endforeach
@endsection

@section('description')
    @foreach ($produk as $item)
        {{$item['desc']}}
    @endforeach
@endsection
```
<br />

## 6. Indomie Detail Section
![App Screenshot](public/img/indomie/detail.png)

In this page, you will find a more detail information about the chosen variant. You can see the image, status, price, name, and detailed description about the variants. 

How does the web know which detail of product to show? The answer is id. Every page have an ID which routes to the detail function of ProdukController which shown below

```bash
Route::get('/produk/{id}', [App\Http\Controllers\ProdukController::class,'detail']);
```

For SEO purposes, the meta description for this page is only specific for the selected product only and the title consist of name of the specific variant
![App Screenshot](public/img/indomie/seodetail.png)

Where for the code you can see below
```bash
@section('title')
    {{$item['name']}}
@endsection

@section('description')
    {{$item['desc']}}
@endsection
```
<br />

## Authors

- [@vincent-kartamulya](https://github.com/vincent-kartamulya/)
