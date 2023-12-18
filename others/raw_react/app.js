const Button = (props) => {
    const {color,bgColor,text} = props;
    return <button className={`py-2 px-4 ${color} hover:${bgColor} mt-5 font-semibold text-gray-100`}>{text}</button>;
};



const ButtonContainer = () => {
    return <>
        <h3 className="text-xl font-normal text-gray-800 bg-blue-200 py-2">This is Example of Button</h3>
        <div className="space-x-4">
        <Button color="bg-green-400" bgColor="bg-green-600" text="Click Me!"/>
        <Button color="bg-red-400" bgColor="bg-red-600" text="Delete Me!"/>
        </div>
    </>;
};



const App = () => {
    return <div className="text-center mx-auto">
        <div className="text-center text-3xl mx-auto font-semibold text-gray-100 bg-gray-600 py-5">Hello React Template!</div>
        <ButtonContainer />
    </div>;
};





ReactDOM.render(<App />, document.getElementById("app"));