// JavaScript Basics

// // Deklarasi
// var a;

// // Inisialisasi
// a = 10

// Variable -> Kontainer untuk menyimpan data dalam aplikasi kita
// var
// let
// const
// Scope -> Jangkauan / lingkupan dimana kita bisa memakai variable kita
// var nama = "Ezra"
// console.log(nama)

// let a = 10
// console.log(a)

// const b = 20
// console.log(b)

// // Let -> Block Scope
// let c = 10
// {
//     let c = 20
//     console.log(c)
// }
// console.log(c)

// // Var -> Global Scope
// var d = 30
// {
//     var d = 40
//     console.log(d)
// }
// console.log(d)

// // Const -> Constant
// const pi = 3.14
// console.log(pi)

// // Data Type
// // Primitive
// // String -> Tipe data untuk Teks
// var a = "Hello"
// console.log(typeof(a))

// // Number -> Berlaku untuk bilangan bulat dan bilangan desimal
// a = 10
// console.log(typeof(a))
// a = 1.1
// console.log(typeof(a))

// // Programming Language C
// // Integer -> Bilangan Bulat -> 1, 2, 3
// // Float -> Bilangan Desimal -> 1.1, 2.2, 3.3

// // Boolean -> memiliki dua nilai, true and false
// var isStudent = true
// console.log(typeof(isStudent))

// // NULL -> nilai kosong
// var a = null
// console.log(a)

// // Undefined -> tidak didefinisikan tipedatanya
// var b;
// console.log(b)
// b = 10
// console.log(typeof(b))

// Reference

// Object -> kumpulan nilai yang disimpan dalam key-value pairs
// Users -> Username dan password
// var user = {
//     // Key      Value
//     username: "EzraArya",
//     password: "password123"
// }

// console.log(user.username)
// console.log(user.password)

// // Array -> Kumpulan Data
// // fruits -> Mangga, Pisang, Apel
// var fruits = ["Mangga", "Pisang", "Apel"]
// console.log(fruits)
// console.log(fruits[0])
// fruits[0] = "Jeruk"
// console.log(fruits[0])

// // Menambahkan Data ke Array
// fruits.push("Semangka")
// console.log(fruits)

// // Remove data dari array
// fruits.pop()
// console.log(fruits)

// Function -> Sebuah objek yang bisa dipanggil berulang kali untuk menjalankan sebuah instruksi
// Sebuah Instruksi untuk print hello world

// function greetings() {
//     console.log("Hello World")
// }

// // Sebuah instruksi untuk print Hello, nama user
// function sayHello(nama) {
//     console.log("Hello, " + nama)
// }

// // Sebuah instruksi untuk pertambahan
// function addition(a, b) {
//     return a + b
// }

// console.log(addition(1, 2))

// var sum = addition(2, 4)
// console.log(sum)

// Control Flow
// IF Statement -> Suatu kondisi untuk menjalankan suatu instruksi

// // Nilai dari user dan ngeprint Alphabet sesuai dengan nilainya
// var nilai = 80

// // nilai > 90 -> A
// // nilai <= 90 dan nilai > 70 -> B
// // C+ -> <= 80 dan nilai > 70
// // Selain itu -> C

// if (nilai > 90) {
//     console.log("A")
// } else if (nilai <= 90 && nilai > 70) {
//     if (nilai > 80) {
//         console.log("B")
//     } else {
//         console.log("C+")
//     }
// } else {
//     console.log("C")
// }

// Switch Case
// Menu
// 1 -> Home Page
// 2 -> Detail Page
// 3 -> Profile Page
// 4 -> Exit
// var input = 100

// switch(input) {
//     case 1:
//         console.log("Home Page")
//         break
//     case 2: 
//         console.log("Detail Page")
//         break
//     case 3:
//         console.log("Profile Page")
//         break
//     case 4: 
//         console.log("Exit")
//         break
//     default:
//         console.log("Incorrect Input")
//         break;
// }

// Looping -> Cara untuk menjalankan suatu instruksi berulang kali sampai suatu kondisi tercapai
// For Loop -> Jalankan instruksi tersebut selama kondisi belum tercapai

// for(var i = 1; i <= 10; i++) {
//     console.log(i)
// }

// While Loop -> Selama kondisi terpenuhi jalankan instruksi tersebut

// var num = 1

// while (num <= 10) {
//     console.log(num)
//     num = num + 1
// }

// Do While Loop -> Jalankan instruksi tersebut lalu cek kondisi
// var n = 0

// do {
//     console.log(n)
//     n++
// } while(n < 10)