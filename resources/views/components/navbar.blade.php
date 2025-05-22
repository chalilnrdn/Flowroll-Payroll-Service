<nav class="navbar navbar-expand-lg navbar-dark bg-white">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">
            <img src="{{ asset('assets/FlowRoll-img.svg') }}" alt="">
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @auth
                    @if (Auth::user()->role === 'bendahara')
                        {{-- navbar bendahara --}}
                        <li class="nav-item"><a href="{{ route('manage.employee.index') }}" class="nav-link" style="color: #2B2525;">Manage Employee</a></li>
                        <li class="nav-item"><a href="{{ route('manage.attendance.index') }}" class="nav-link" style="color: #2B2525;">Attendance Recap</a></li>
                        <li class="nav-item"><a href="{{ route('manage.payroll.index') }}" class="nav-link" style="color: #2B2525;">Manage Salary</a></li>
                    @elseif(Auth::user()->role === 'karyawan')
                        {{-- navbar karyawan --}}
                        <li class="nav-item"><a href="{{ route('employee.dashboard') }}" class="nav-link" style="color: #2B2525;">Home</a></li>
                        <li class="nav-item"><a href="{{ route('attendance.index') }}" class="nav-link" style="color: #2B2525;">My Attendance</a></li>
                        <li class="nav-item"><a href="{{ route('salary.index') }}" class="nav-link" style="color: #2B2525;">My Salary</a></li>
                    @endif
                @endauth
            </ul>
        </div>

        <div class="ms-auto d-flex align-items-center">
            @guest
            <a href="{{ route('login') }}" class="btn-primary btn btn-outline-light py-1 px-4">Login</a>     
            @else
                <span class="text-white me-3">{{ Auth::user()->name }}</span>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn-primary btn btn-outline-light btn-sm">Logout</button>
                </form>
            @endguest
       </div>
    </div>
</nav>

<style>
    .btn-primary{
    background-color: #FA723D;
    color: white;
    text-decoration: none;
    transition: 0.2s;
  }

  .btn-primary:hover{
    background-color: #2B2525;
    color: white;
    text-decoration: none;
  }
    

</style>