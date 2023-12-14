import { useEffect,useState } from 'react'
import './App.css'

function App() {

  const [user,setUser] = useState(null);


  useEffect(() => {
    const fetchApi = async () => {
      const response = await fetch('http://127.0.0.1:8000/api/random-user');
      const data = await response.json();
      setUser(data);
      console.log(data);
    }
    setInterval(fetchApi, 5000);
  },[user]);

  return (
    <>
      <div className="App">
          User Name : {user && user.name}
      </div>
    </>
  )
}

export default App
