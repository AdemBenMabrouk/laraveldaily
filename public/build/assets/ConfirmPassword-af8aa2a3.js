import{K as l,r as p,j as a,a as s,n as c}from"./app-a2f72a59.js";import{G as u}from"./GuestLayout-1850a7b1.js";import{T as f,I as w}from"./TextInput-532ee0b4.js";import{I as h}from"./InputLabel-cc8b1003.js";import{P as g}from"./PrimaryButton-395a447d.js";import"./ApplicationLogo-9ab3c8f7.js";function C(){const{data:e,setData:t,post:o,processing:n,errors:m,reset:i}=l({password:""});p.useEffect(()=>()=>{i("password")},[]);const d=r=>{t(r.target.name,r.target.value)};return a(u,{children:[s(c,{title:"Confirm Password"}),s("div",{className:"mb-4 text-sm text-gray-600 dark:text-gray-400",children:"This is a secure area of the application. Please confirm your password before continuing."}),a("form",{onSubmit:r=>{r.preventDefault(),o(route("password.confirm"))},children:[a("div",{className:"mt-4",children:[s(h,{forInput:"password",value:"Password"}),s(f,{id:"password",type:"password",name:"password",value:e.password,className:"mt-1 block w-full",isFocused:!0,handleChange:d}),s(w,{message:m.password,className:"mt-2"})]}),s("div",{className:"flex items-center justify-end mt-4",children:s(g,{className:"ml-4",processing:n,children:"Confirm"})})]})]})}export{C as default};
