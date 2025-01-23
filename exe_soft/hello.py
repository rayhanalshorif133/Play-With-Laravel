import tkinter as tk
from tkinter import messagebox

def show_message():
    messagebox.showinfo("Hello", "Hello, World!")

root = tk.Tk()
root.title("Click and Show")
root.geometry("200x100")

btn = tk.Button(root, text="Click Me!", command=show_message)
btn.pack(expand=True)

root.mainloop()
