@extends('layout.layout')

@section('content')

<style>

.garis_verikal{
border-left: 1px black solid;
height: 770px;
width: 0px;
}

    #structure-organization {
  padding: 50px 0;
}

#structure-organization h2 {
  text-align: center;
  margin-bottom: 30px;
}

#structure-organization h3 {
  margin-bottom: 10px;
}

#structure-organization ul {
  list-style-type: none;
  padding-left: 0;
}

#structure-organization ul li {
  margin-bottom: 5px;
}

@media (max-width: 767px) {
  #structure-organization .row {
    flex-direction: column;
  }
}

</style>
<section id="structure-organization">
    <div class="container">
      <h2>Structure Organization</h2>
  <br><br>
      <div class="row">
        <div class="col-6">
          <div class="row">
            <div class="col-md-12">
              <div class="founder">
                <h3>Founder</h3>
                <ul>
                  <li>Adrian Septiadi</li>
                </ul>
              </div>
            </div>
          </div>

        </div>
        <div class="col-6">

          <div class="row">
            <div class="col-md-12">
              <div class="co-founder">
                <h3>Co-founder</h3>
                <ul>
                  <li>Ismi Shofayana BZ</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
  <br>
  <hr>
  <br>
      <div class="row">
        <div class="col-md-6">
          <div class="ceo">
            <h3>CEO</h3>
            <ul>
              <li>George Ricarrson</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="coo">
            <h3>COO</h3>
            <ul>
              <li>Devina Eldiana Nugroho</li>
            </ul>
          </div>
        </div>
      </div>

      <br>
  <hr>
  <br>
      <div class="row">
        <div class="col-6">
          <div class="row">
            
            <div class="col-md-4">
              <div class="department">
                <h3>HRD</h3>
                <ul>
                  <li>Head: Wulan Rahmawati </li><br>
                  <li>Vice Head: Rostina Wulandari</li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="department">
                <h3>Secretary</h3>
                <ul>
                  <li>Head: Rara Puspita</li><br>
                  <li>Vice Head: Fadhila Nafiz</li>
                </ul>
              </div>
            </div>

            <div class="col-md-4">
              <div class="department">
                <h3>Finance</h3>
                <ul>
                  <li>Head: Marsya Rachmadewi</li><br>
                  <li>Vice Head: Anggara Dwi Handoko</li>
                </ul>
              </div>
            </div>
          </div>

        </div>
        <div class="col-1">
          
          {{-- <div class="garis_verikal"></div> --}}
        </div>

        <div class="col-5">
          <div class="row">
            <div class="col-md-6">
              <div class="department">
                <h3>ASR ACADEMY</h3>
                <ul>
                  <li>Head: Muhammad Iqbal</li>
                  <li>Vice Head: Asysya Albina</li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="department">
                <h3>ASR CAREER</h3>
                <ul>
                  <li>Head: Doni Renaldi</li>
                  <li>Vice Head: Anna Triwulandari</li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
      <br> 
        <hr>
      <div class="row">
        <div class="col-6">
          <div class="row">
            
            <div class="col-md-4">
              <div class="department">
                <h3> Customer Service</h3>
                <ul>
                  <li>Head: Adinda Alya</li><br>
                  <li>Vice Head: Alfira Destiyanti</li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="department">
                <h3>Public relation </h3>
                <ul>
                  <li>Head: Asila Ghina Rahmani</li><br>
                  <li>Vice Head: Fitriyani Samsul</li>
                </ul>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="department">
                <h3>Public Speaker</h3>
                <ul>
                  <li>Head: Syadza Harun</li><br>
                  <li>Vice Head: Fahmi Nur Alim</li>
                  
                </ul>
              </div>
            </div>
          </div>

        </div>
        <div class="col-1">
          
          {{-- <div class="garis_verikal"></div> --}}
        </div>

        <div class="col-5">
          <div class="row">

            <div class="col-md-6">
              <div class="department">
                <h3>ASR SOCIETY</h3>
                <ul>
                  <li>Head: Qibella An Najudu</li>
                  <li>Vice Head: Ayu Permata Widya</li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="department">
                <h3>ASR CREATIVITY</h3>
                <ul>
                  <li>Head: Annisa Nurul</li>
                  <li>Vice Head: Eriana Dhea</li>
                </ul>
              </div>
            </div>
            
          </div>
        </div>
        
      </div> 
      <br>
         <hr>

         <div class="row">
          <div class="col-6">
              <div class="row">

                <div class="col-md-4">
                  
                  <div class="department">
                    <h3> Project Officer</h3>
                    <ul>
                      <li>Head: Muchammad Dika</li><br>
                      <li>Vice Head: Wahdatul Baroroh</li>
                      {{-- <li>Anggota: [Nama Anggota]</li> --}}
                      
                    </ul>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="department">
                    <h3>Content Creator</h3>
                    <ul>
                      <li>Head: Fiorenza Callysta</li><br>
                      <li>Vice Head: Patricia Munthe</li>
                    </ul>
                  </div>
                </div>
                
                <div class="col-md-4">
              <div class="department">
                <h3>Content Writer</h3>
                <ul>
                  <li>Head: Deis Azka Nabila</li><br>
                  <li>Vice Head: Izam Lisa'iharodiyah</li>
                  {{-- <li>Anggota: [Nama Anggota]</li> --}}
                  
                </ul>
              </div>
            </div>
          
          </div>
  
          </div>
          <div class="col-1">
            
            {{-- <div class="garis_verikal"></div> --}}
          </div>
  
          <div class="col-5">
            <div class="row">

              <div class="col-md-6">
                <div class="department">
                  <h3>ASR CONSULTING</h3>
                  <ul>
                    <li>Head: Nadia Salsabila</li>
                    <li>Vice Head: Afifa Azahra</li>
                  </ul>
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="department">
                  <h3>ASR AMBASSADOR</h3>
                  <ul>
                    <li>Head: Risal Hilmy</li>
                    <li>Vice Head: Tasya Putri</li>
                  </ul>
                </div>
              </div>
              
            </div>
          </div>
          
        </div> 
        <br>
           <hr>

           <div class="row">
            <div class="col-6">
                <div class="row">

                  <div class="col-md-4">
                    <div class="department">
                        <h3> Grapihc Designer</h3>
                        <ul>
                          <li>Head: Muhammad Syarif Rahman</li><br>
                          <li>Vice Head: Ni'mah Shafwah Andini</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-4">
                    <div class="department">
                      <h3>Web Developer</h3>
                      <ul>
                        <li>Head: Lucas Jan Malvin</li><br>
                        <li>Vice Head: Silvanya Assyfa frizli</li>
                      </ul>
                    </div>
                  </div>
            
                  <div class="col-md-4">
                    <div class="department">
                      <h3>Social Media Optimizer</h3>
                      <ul>
                        <li>Head: Zahira Mahdiyah</li><br>
                        <li>Vice Head: Patsy Rovina</li>
                      </ul>
                    </div>
                  </div>
                  
                </div>
          
            
            </div>
    
            <div class="col-1">
              
              {{-- <div class="garis_verikal"></div> --}}
            </div>
    
            <div class="col-5">
              <div class="row">
            
                <div class="col-md-12">
                  <div class="department">
                    <h3>ASR BUSSINES & STORE</h3>
                    <ul>
                      <li>Head: Ebenezer Sondang Simajuntak</li> 
                      <li>Vice Head: Dewi Setiyowati</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <br>
             
          
      
      
    

      <!-- Tambahkan departemen lainnya sesuai struktur organisasi yang diberikan -->
  
  </section>
  

@endsection