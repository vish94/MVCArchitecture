# MVCArchitecture

MVC was one of the seminal insights in the early development of graphical user interfaces, and one of the first approaches to describe and implement software constructs in terms of their responsibilities.

<h2>Components</h2>

A typical collaboration of the MVC components.
The central component of MVC, the model, captures the behavior of the application in terms of its problem domain, independent of the user interface. The model directly manages the data, logic and rules of the application.
A view can be any output representation of information, such as a chart or a diagram; multiple views of the same information are possible, such as a bar chart for management and a tabular view for accountants.
The third part, the controller, accepts input and converts it to commands for the model or view.

<h2>Interactions</h2>
In addition to dividing the application into three kinds of components, the model–view–controller design defines the interactions between them.
<ul>
<li>A controller can send commands to the model to update the model's state (e.g., editing a document). It can also send commands to its associated view to change the view's presentation of the model (e.g., by scrolling through a document).</li>
<li>A model stores data that is retrieved according to commands from the controller and displayed in the view.</li>
<li>A view generates an output presentation to the user based on changes in the model.</li>
<li>A view controller generates an output view and an embedded controller</li>
</ul>