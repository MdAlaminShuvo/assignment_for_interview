# assignment_for_interview
# for task_1
In this example, i have a base Shape class that serves as the parent class for all geometric shapes. It doesn't have any specific properties or methods, as it's meant to be a common base.
The Circle class extends Shape and has a constructor that takes the radius as a parameter. It has a calculateArea method that calculates the area of the circle using the formula πr^2.

The Rectangle class also extends Shape and takes width and height as parameters in its constructor. Its calculateArea method computes the area of the rectangle by multiplying its width and height.

Finally, i demonstrate how to create instances of Circle and Rectangle and calculate their respective areas.

# for task_3
Create an Animal class and define the basic structure.
Then create subclasses for different animals, each overriding the makeSound method.
In this example, i have an Animal base class with a makeSound method. Then, i create subclasses Dog, Cat, and Cow, each of which overrides the makeSound method to provide a specific sound.

When i create instances of these animal classes and call the makeSound method, polymorphism comes into play. Even though we're using the same method name (makeSound), each subclass provides its own unique implementation of the method.

This demonstrates the concept of polymorphism, where objects of different classes can be treated as instances of a common base class (Animal in this case) and still exhibit different behaviors based on their individual implementations.

# for task_5
Develop a simple To-do crud module using Laravel Framework. Use blade for the view rendering. I do not know VueJs.
